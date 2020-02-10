<!DOCTYPE html>
<html lang="en" id="mainPage">
<head>
    <title>Creamy Doughnuts | Menu Page</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Montserrat|Josefin+Sans|Raleway" rel="stylesheet">
    <script src="http://use.edgefonts.net/righteous:n4:all.js"></script>
    <?php require_once 'includes/header.html'; ?>
    <style>
        main {
            padding-bottom: 100px;
        }

        .searchDiv {
            position: relative;
            margin: 0 auto;
            width: 100%;
            min-height: 30px;
        }

        .footer {
            z-index: 1;
            top: 1500px;
        }
    </style>
</head>
<body>
<?php include_once('includes/signInStrip.html'); ?>
<div class="page-container">
    <header>
        <?php include_once('includes/navigation.html'); ?>
    </header>
    <main>
        <div id="searchDiv" class="searchDiv">
            <?php include_once('includes/searchbar.html'); ?>
        </div>
        <div class="main_content" id="menu-main-content">
            <div id="menu-wrapper" class="menu-wrapper">
                <div id="menu-tabs" class="menu-tabs">
                    <button class="menu-tab" onclick="showTab('menu-doughnuts', this)" id="doughnutsOpen">Doughnuts
                    </button>
                    <button class="menu-tab" onclick="showTab('menu-coffee', this)" id="coffeeOpen">Coffee</button>
                </div>
                <div id="menu-doughnuts" class="menu-divs tabcontent">
                </div>
                <div id="menu-coffee" class="menu-divs tabcontent">
                </div>
            </div>
            <?php require_once 'includes/hover_buttons.html'; ?>
        </div>
        <?php require_once 'includes/shoppingCart.html'; ?>
    </main>
    <footer>
        <?php include_once('includes/footer.html'); ?>
    </footer>
</div>
<script>
    loadProductMenu('Doughnuts');
    loadProductMenu('Coffee');

    function loadProductMenu(productType) {
        let url = "includes/products.php?menu=" + productType;
        ajaxFormGet(url, function () {
            if (this.readyState === 4 && this.status === 200) {
                loadMenuItems(this.responseText, productType);
            } else {
                console.log(this.status + ":" + this.readyState);
            }
        });
    }

    function loadMenuItems(array, productType) {
        let file = JSON.parse(array);
        let container, divClass;
        if (productType === 'Doughnuts') {
            container = document.getElementById('menu-doughnuts');
            divClass = 'menu-item-doughnuts'
        } else {
            container = document.getElementById('menu-coffee');
            divClass = 'menu-item-coffee'
        }
        let innerDiv = document.createElement('div');
        innerDiv.className = 'menu-container';
        container.appendChild(innerDiv);
        for (let i = 0; i < file.length; i++) {
            let menuItem = document.createElement('div');
            menuItem.id = file[i]['ProductID'];
            menuItem.className = divClass;
            menuItem.onmouseover = function () {
                onHoverMenuItem(this);
            };
            menuItem.onmouseout = function () {
                onMouseOutMenuItem(this);
            };
            let image = document.createElement('img');
            image.src = file[i]['ProductImage'];
            menuItem.appendChild(image);
            let itemTitle = document.createElement('div');
            itemTitle.className = 'item-title';
            itemTitle.innerHTML = "<h2>" + file[i]['ProductTitle'] + "</h2>";
            menuItem.appendChild(itemTitle);
            let itemDescription = document.createElement('div');
            itemDescription.className = 'item-description';
            itemDescription.innerHTML = "<p><span>" + file[i]['ProductDescription'] + "</span></p>";
            menuItem.appendChild(itemDescription);
            let cartButton = document.createElement('div');
            cartButton.className = 'cart-button-div';
            let prID = file[i]['ProductID'];
            cartButton.innerHTML = "<button class='cart-button' type='button'>Add to cart</button>";
            cartButton.onclick = function () {
                getProduct(prID);
            };
            menuItem.appendChild(cartButton);
            innerDiv.appendChild(menuItem);
        }
    }

    function getProduct(data) {
        let url = "includes/cart.php?cart=" + data;
        ajaxFormGet(url, function () {
            if (this.readyState === 4 && this.status === 200) {
                addToCart(this.responseText);
            } else {
                console.log(this.status + ":" + this.readyState);
            }
        });
    }

    function addToCart(data) {
        let cart = document.getElementById('shoppingCartItems');
        if (data !== '-1') {
            let file = JSON.parse(data);
            if (file.length > 0) {
                for (let i = 0; i < file.length; i++) {
                    let pView = document.createElement('div');
                    pView.className = 'cartProductView';
                    let product = document.createElement('div');
                    product.className = 'cartProduct';
                    let deleteCart = document.createElement('div');
                    deleteCart.className = "deleteProduct";
                    deleteCart.id = file[i]["ProductID"];
                    deleteCart.innerHTML = "&times;";
                    deleteCart.onclick = function () {
                        this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);
                    };
                    product.appendChild(deleteCart);
                    let cartImage = document.createElement('img');
                    cartImage.src = file[i]["ProductImage"];
                    product.appendChild(cartImage);
                    let cartTitle = document.createElement('span');
                    cartTitle.innerText = file[i]["ProductTitle"];
                    product.appendChild(cartTitle);
                    pView.appendChild(product);
                    let quantity = document.createElement('div');
                    quantity.className = 'cartQuantity';
                    let quanField = document.createElement('span');
                    quanField.className = "qfieldQuantity";
                    quanField.innerText = "1";
                    let decButton = document.createElement('button');
                    decButton.className = "decrementQuantity quantityButtons";
                    decButton.innerText = "-";
                    decButton.onclick = function () {
                        let val = parseInt(quanField.innerText);
                        if (val === 1) {
                            quanField.disabled = true;
                        } else {
                            quanField.disabled = false;
                            let num = val - 1;
                            quanField.innerText = num.toString();
                        }
                    };
                    let incButton = document.createElement('button');
                    incButton.className = "incrementQuantity quantityButtons";
                    incButton.innerText = "+";
                    incButton.onclick = function () {
                        let number = parseInt(quanField.innerText) + 1;
                        quanField.innerText = number.toString();
                    };
                    quantity.appendChild(decButton);
                    quantity.appendChild(quanField);
                    quantity.appendChild(incButton);
                    pView.appendChild(quantity);
                    cart.appendChild(pView);
                }
            } else {
                console.log('Data list empty');
            }
        } else {
            console.log('Result empty');
        }
    }

    function showTab(pageName) {
        let i, tabcontent, menutabs;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        menutabs = document.getElementsByClassName("menu-tab");
        for (i = 0; i < menutabs.length; i++) {
            menutabs[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("doughnutsOpen").click();

    function onHoverMenuItem(element) {
        let elementId = element.id;
        let el = document.getElementById(elementId);
        el.classList.add('active-menu-item');
    }

    function onMouseOutMenuItem(element) {
        let elementId = element.id;
        let el = document.getElementById(elementId);
        el.classList.remove('active-menu-item');
    }
</script>
<script defer>
    let url = document.location.search;
    if (url === "?doughnuts") {
        document.getElementById("doughnutsOpen").click();
    } else if (url === "?coffee") {
        document.getElementById("coffeeOpen").click();
    } else {
        document.getElementById("doughnutsOpen").click();
    }
</script>
</body>
</html>