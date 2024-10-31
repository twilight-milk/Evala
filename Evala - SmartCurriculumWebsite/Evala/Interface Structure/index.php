<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include 'nav.php'; ?>
    <?php include 'sidebar.php'; ?>

    
    <div class="categories-header">
        <div class="categories">
            <a class="category-item active" data-tab="all-products" onclick="showTab('all-products')">Overview</a>
            <a class="category-item" data-tab="instruments" onclick="showTab('instruments')">Ongoing </a>
            <a class="category-item" data-tab="soundpacks" onclick="showTab('soundpacks')">Completed</a>
            <!-- <a class="category-item" data-tab="cables" onclick="showTab('cables')">Cables</a>
            <a class="category-item" data-tab="bags" onclick="showTab('bags')">Bags & Protection</a>
            <a class="category-item" data-tab="merch" onclick="showTab('merch')">Merch</a>
            <a class="category-item" data-tab="addons" onclick="showTab('addons')">Add ons</a> -->
        </div>
    </div>

    <div class="tab-content">
        <div id="all-products" class="tab active">
            <div class="products-list">
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Evaluation Status</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Evaluation Status</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Evaluation Status</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>
                
                <!-- Add more product items here -->
            </div>
        </div>
        <div id="instruments" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>

            </div>
        </div>
        <div id="soundpacks" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Subject Name</div>
                    <div class="product-price">Subject Code</div>
                </div>
            </div>
        </div>
        <!-- <div id="cables" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
            </div>

        </div> -->
        <!-- <div id="bags" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
            </div>
        </div> -->
        <!-- <div id="merch" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
            </div>
        </div> -->
        <!-- <div id="addons" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
            </div>
        </div> -->

    </div>

    <?php include 'footer.php'; ?>

    <script>
        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab');
            const tabButtons = document.querySelectorAll('.categories .category-item');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.categories .category-item[data-tab=${tabId}]`).classList.add('active');
        }
    </script>
    <script src="index.js"></script>

</body>
</html>

<script>
    function showTab(tabId) {
        const tabs = document.querySelectorAll('.tab');
        const tabButtons = document.querySelectorAll('.tabs div');
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        tabButtons.forEach(button => {
            button.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active');
        document.querySelector(`.tabs div[data-tab=${tabId}]`).classList.add('active');
    }

    function toggleBillingAddress() {
        const billingForm = document.getElementById('billing-address-form');
        const isChecked = document.getElementById('same_as_shipping').checked;
        
        if (isChecked) {
            billingForm.classList.add('disabled');
            billingForm.querySelectorAll('input').forEach(input => {
                input.disabled = true;
            });
        } else {
            billingForm.classList.remove('disabled');
            billingForm.querySelectorAll('input').forEach(input => {
                input.disabled = false;
            });
        }
    }
</script>