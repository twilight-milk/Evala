<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evala - Questionnaire</title>
    <link rel="stylesheet" href="questionnaire.css">
    <link rel="stylesheet" href="all.css">
</head>
<body>



    <?php include 'nav.php'; ?>



    <div class="progcontainer">
        <ul id="progressbar">
            <li class="active">Course Content</li>
            <li>Teaching Methods</li>
            <li>Learning Outcomes</li>
        </ul>
    </div>



    <div class="containerism">  
        <div class="account">




            <div class="tabs">
                <div data-tab="tab-account" onclick="showTab('tab-account')" class="active">Course Content</div>
                <div data-tab="tab-registered-products" onclick="showTab('tab-registered-products')">Teaching Methods</div>
                <div data-tab="tab-orders" onclick="showTab('tab-orders')">Learning Outcomes</div>
            </div>


            
            <div class="tab-content" id="tab-content">
                <div id="tab-account" class="tab active">
                    <form action="save_account.php" method="POST">
                        <div class="input-field">
                            <h4>Privacy Settings</h4>
                            <div class="form-row">
                                <p>We care about your integrity, and continuously work toward making your Evala experience as safe and secure as possible. Read the Evala Privacy Policy to learn more about how we use and store personal data.</p>
                            </div>
                            <div class="form-row">
                                <p>This page is where you will be able to manage your privacy settings. Return to review this page, as it will be continuously updated.</p>
                            </div>
                        </div>

                        <div class="input-field">
                            <h4>Personal Information</h4>
                                <h>Full Name</h>
                                <div class="form-row">
                                    <div>
                                        <input type="text" id="first_name" name="first_name" required placeholder="First Name">
                                    </div>
                                    <div>
                                        <input type="text" id="last_name" name="last_name" required placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <h>Contact Information</h>
                                <div class="form-row">
                                    <div>
                                        <input type="text" id="first_name" name="first_name" required placeholder="Student Number">
                                    </div>
                                    <div>
                                        <input type="text" id="last_name" name="last_name" required placeholder="School Email">
                                    </div>
                                </div>
                            </div>
                            <div class="question">
                            <h>What is your age group?</h>
                                <label><input type="radio" name="age" value="18-25"> 18-25</label><br>
                                <label><input type="radio" name="age" value="26-35"> 26-35</label><br>
                                <label><input type="radio" name="age" value="36-45"> 36-45</label><br>
                                <label><input type="radio" name="age" value="46+"> 46+</label>
                            </div>
                    </form>
                    <div class="two-buttons">
                        <button class="con-shopping">Back</button><button class="con-shopping">Next</button>
                    </div>
                </div>
                <div id="tab-registered-products" class="tab">

                        <form action="save_account.php" method="POST" id="billing-address-form">
                            <!-- Curriculum Objectives Section -->
                            <div class="input-field">
                                <h4>Curriculum Objectives</h4>
                                <div class="form-row">
                                    <p>We care about your integrity, and continuously work toward making your Evala experience as safe and secure as possible. Read the Evala Privacy Policy to learn more about how we use and store personal data.</p>
                                </div>
                                <div class="form-row">
                                    <p>This page is where you will be able to manage your privacy settings. Return to review this page, as it will be continuously updated.</p>
                                </div>
                            </div>
                
                            <table>
                            <tr>
                                <th rowspan="2" class="questionRate">Questionnaire</th>
                            </tr>
                            <tr>
                                <th>Strongly Agree</th>
                                <th>Agree</th>
                                <th>Uncertain</th>
                                <th>Disagree</th>
                                <th>Strongly Disagree</th>
                            </tr>
                            <tr>
                                <td class="questionRate">The objectives of the program are clearly defined and understood.</td>
                                <td><input type="radio" name="q1" value="strongly-agree"></td>
                                <td><input type="radio" name="q1" value="agree"></td>
                                <td><input type="radio" name="q1" value="uncertain"></td>
                                <td><input type="radio" name="q1" value="disagree"></td>
                                <td><input type="radio" name="q1" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The objectives are within the framework of the University philosophy, “Veritas et Fortitudo” and “Pro Deo et Patria”.</td>
                                <td><input type="radio" name="q2" value="strongly-agree"></td>
                                <td><input type="radio" name="q2" value="agree"></td>
                                <td><input type="radio" name="q2" value="uncertain"></td>
                                <td><input type="radio" name="q2" value="disagree"></td>
                                <td><input type="radio" name="q2" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The objectives are realistic.</td>
                                <td><input type="radio" name="q3" value="strongly-agree"></td>
                                <td><input type="radio" name="q3" value="agree"></td>
                                <td><input type="radio" name="q3" value="uncertain"></td>
                                <td><input type="radio" name="q3" value="disagree"></td>
                                <td><input type="radio" name="q3" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The objectives are relevant to the needs of the students.</td>
                                <td><input type="radio" name="q4" value="strongly-agree"></td>
                                <td><input type="radio" name="q4" value="agree"></td>
                                <td><input type="radio" name="q4" value="uncertain"></td>
                                <td><input type="radio" name="q4" value="disagree"></td>
                                <td><input type="radio" name="q4" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The objectives are relevant to the needs of the profession/discipline.</td>
                                <td><input type="radio" name="q5" value="strongly-agree"></td>
                                <td><input type="radio" name="q5" value="agree"></td>
                                <td><input type="radio" name="q5" value="uncertain"></td>
                                <td><input type="radio" name="q5" value="disagree"></td>
                                <td><input type="radio" name="q5" value="strongly-disagree"></td>
                            </tr>
                        </table>

                        <!-- Course Content Section -->
                        <div class="input-field">
                            <h4>Course Content</h4>
                            <div class="form-row">
                                <p>We care about your integrity, and continuously work toward making your Evala experience as safe and secure as possible. Read the Evala Privacy Policy to learn more about how we use and store personal data.</p>
                            </div>
                            <div class="form-row">
                                <p>This page is where you will be able to manage your privacy settings. Return to review this page, as it will be continuously updated.</p>
                            </div>
                        </div>

                        <!-- Course Content Questionnaire Table -->
                        <table>
                            <tr>
                                <th rowspan="2" class="questionRate">Questionnaire</th>
                            </tr>
                            <tr>
                                <th>Strongly Agree</th>
                                <th>Agree</th>
                                <th>Uncertain</th>
                                <th>Disagree</th>
                                <th>Strongly Disagree</th>
                            </tr>
                            <tr>
                                <td class="questionRate">The course content is generally perceived as comprehensive.</td>
                                <td><input type="radio" name="q1_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q1_content" value="agree"></td>
                                <td><input type="radio" name="q1_content" value="uncertain"></td>
                                <td><input type="radio" name="q1_content" value="disagree"></td>
                                <td><input type="radio" name="q1_content" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The syllabi's emphasis on connections within and across disciplines is seen positively.</td>
                                <td><input type="radio" name="q2_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q2_content" value="agree"></td>
                                <td><input type="radio" name="q2_content" value="uncertain"></td>
                                <td><input type="radio" name="q2_content" value="disagree"></td>
                                <td><input type="radio" name="q2_content" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The syllabi's provision of items leading to conceptual understanding is well-regarded.</td>
                                <td><input type="radio" name="q3_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q3_content" value="agree"></td>
                                <td><input type="radio" name="q3_content" value="uncertain"></td>
                                <td><input type="radio" name="q3_content" value="disagree"></td>
                                <td><input type="radio" name="q3_content" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">There is strong agreement that appropriate technology is incorporated into the syllabi.</td>
                                <td><input type="radio" name="q4_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q4_content" value="agree"></td>
                                <td><input type="radio" name="q4_content" value="uncertain"></td>
                                <td><input type="radio" name="q4_content" value="disagree"></td>
                                <td><input type="radio" name="q4_content" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">Experiences related to research are well-integrated in the syllabi.</td>
                                <td><input type="radio" name="q5_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q5_content" value="agree"></td>
                                <td><input type="radio" name="q5_content" value="uncertain"></td>
                                <td><input type="radio" name="q5_content" value="disagree"></td>
                                <td><input type="radio" name="q5_content" value="strongly-disagree"></td>
                            </tr>
                            <tr>
                                <td class="questionRate">The integration of experiences related to social responsibility is seen positively.</td>
                                <td><input type="radio" name="q6_content" value="strongly-agree"></td>
                                <td><input type="radio" name="q6_content" value="agree"></td>
                                <td><input type="radio" name="q6_content" value="uncertain"></td>
                                <td><input type="radio" name="q6_content" value="disagree"></td>
                                <td><input type="radio" name="q6_content" value="strongly-disagree"></td>
                            </tr>
                        </table>

                        
                    </form>
                </div>
                <div id="tab-orders" class="tab">
                    <h2>Learning Outcomes</h2>
                    <p>Your learning outcomes will be displayed here.</p>
                </div>
            </div>



        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="index.js"></script>

</body>
</html>


<script>
        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab');
            const tabButtons = document.querySelectorAll('.tabs div');
            tabs.forEach(tab => tab.classList.remove('active'));
            tabButtons.forEach(button => button.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.tabs div[data-tab=${tabId}]`).classList.add('active');
        }

        // Ensure Account tab is active on page load
        window.onload = function() {
            showTab('tab-account');
        };
</script>
<script>
        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab');
            const tabButtons = document.querySelectorAll('.tabs div');
            tabs.forEach(tab => tab.classList.remove('active'));
            tabButtons.forEach(button => button.classList.remove('active'));

            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.tabs div[data-tab=${tabId}]`).classList.add('active');
            updateProgressBar(tabId);
        }

        function updateProgressBar(tabId) {
            const index = Array.from(document.querySelectorAll('.tab')).indexOf(document.getElementById(tabId));
            const progressItems = document.querySelectorAll('#progressbar li');

            progressItems.forEach((item, i) => {
                item.classList.remove('active');
                if (i <= index) {
                    item.classList.add('active');
                }
            });
        }

        function nextTab() {
            const activeTab = document.querySelector('.tab.active');
            if (activeTab.nextElementSibling) {
                showTab(activeTab.nextElementSibling.id);
            }
        }

        function previousTab() {
            const activeTab = document.querySelector('.tab.active');
            if (activeTab.previousElementSibling) {
                showTab(activeTab.previousElementSibling.id);
            }
        }

        // Ensure the first tab is active on page load
        window.onload = function() {
            showTab('tab-account');
        };
    </script>
