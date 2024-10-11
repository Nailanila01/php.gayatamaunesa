<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregnancy Services</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #ffb6c1;
            color: #fff;
            padding: 1em;
            text-align: center;
            font-size: 1.5em;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin: 2em auto;
            padding: 2em;
            background-color: white;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 1.5em;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 0.75em;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .button {
            width: 100%;
            padding: 1em;
            background-color: #ffb6c1;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 1.5em;
        }

        .button:hover {
            background-color: #ff8aa0;
        }

        .horizontal-selection {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5em;
        }

        .selection {
            text-align: center;
        }

        .selection img {
            width: 100px;
            height: 100px;
        }

        .selection button {
            margin-top: 1em;
            padding: 0.75em 1em;
            background-color: #ffb6c1;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 0.9em;
            cursor: pointer;
        }

        .selection button:hover {
            background-color: #ff8aa0;
        }

        .dashboard {
            display: none;
        }

        .social-icons {
            text-align: center;
            margin-top: 2em;
        }

        .social-icons a img {
            width: 40px;
            height: 40px;
            margin: 0 10px;
        }

        .back-button {
            background-color: #ff8aa0;
            padding: 1em;
            color: white;
            border: none;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 2em;
        }

        .back-button:hover {
            background-color: #ff7b8a;
        }

        .icon {
            text-align: center;
            margin: 1em 0;
        }

        .icon img {
            width: 80px;
            height: 80px;
        }

        .icon p {
            margin-top: 0.5em;
        }
        
        .chat-dokter {
            text-align: center;
            margin-top: 2em;
        }

        .chat-dokter a {
            display: inline-block;
            padding: 1em 2em;
            background-color: #ffb6c1;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1em;
            cursor: pointer;
        }

        .chat-dokter a:hover {
            background-color: #ff8aa0;
        }
    </style>
</head>
<body>

<header>
    Pregnancy Services
</header>

<!-- Home (Login) -->
<div class="container" id="main-selection">
    <h1>Welcome</h1>
    <div class="login-container">
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Enter username" required>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter password" required>
        </div>
        <button class="button" onclick="checkLogin()">Login</button>
    </div>
</div>

<!-- Category Selection -->
<div class="container" id="category-selection" style="display:none;">
    <h2>Select a Category</h2>
    <div class="horizontal-selection">
        <div class="selection">
            <img src="https://cdn-icons-png.flaticon.com/128/3884/3884999.png" alt="Parenting">
            <button onclick="selectCategory('parenting')">Parenting</button>
        </div>
        <div class="selection">
            <img src="https://cdn-icons-png.flaticon.com/128/4370/4370507.png" alt="Pregnant Mother">
            <button onclick="selectCategory('pregnant_mother')">Pregnant Mother</button>
        </div>
        <div class="selection">
            <img src="https://t4.ftcdn.net/jpg/08/06/21/57/240_F_806215724_Xb20TD5qqhAYss6LcxxS7owpYzSiibWC.jpg" alt="Pregnancy Program">
            <button onclick="selectCategory('pregnancy_program')">Pregnancy Program</button>
        </div>
    </div>
</div>

<!-- Parenting Form -->
<div class="container" id="form-parenting" style="display:none;">
    <h1>Enter Child Data</h1>
    <div class="input-group">
        <label for="child-name">Child Name:</label>
        <input type="text" id="child-name" placeholder="Enter child name">
    </div>
    <div class="input-group">
        <label for="child-age-year">Child Age (Years):</label>
        <input type="number" id="child-age-year" placeholder="Years">
        <input type="number" id="child-age-month" placeholder="Months">
    </div>
    <button class="button" onclick="showDashboard()">Submit</button>
</div>

<!-- Dashboard -->
<div class="container dashboard" id="dashboard">
    <div id="child-info"></div>
    
    <div class="icons" id="dashboard-icons"></div>

    <div class="chat-dokter">
        <a href="http://localhost/gayatama/consultation.php" target="_blank">Chat Dokter</a>
    </div>

    <button class="back-button" onclick="goBack()">Back</button>

    <!-- Social Media Links -->
    <div class="social-icons">
        <a href="https://www.instagram.com/siloamhospitals/?hl=en" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/siloamhospitalsgroup/events/?_rdr" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook">
        </a>
        <a href="https://x.com/siloamhospitals?lang=en" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter">
        </a>
    </div>
</div>

<script>
    var selectedCategory = '';

    function checkLogin() {
        var email = document.getElementById('email').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        if (email && username && password) {
            document.getElementById('main-selection').style.display = 'none';
            document.getElementById('category-selection').style.display = 'block';
        } else {
            alert('Please fill in all fields.');
        }
    }

    function selectCategory(category) {
        selectedCategory = category;
        document.getElementById('category-selection').style.display = 'none';

        if (category === 'parenting') {
            document.getElementById('form-parenting').style.display = 'block';
        } else {
            showDashboard();
        }
    }

    function showDashboard() {
        if (selectedCategory === 'parenting') {
            var childName = document.getElementById('child-name').value;
            var childAgeYear = document.getElementById('child-age-year').value;
            var childAgeMonth = document.getElementById('child-age-month').value;

            if (childName) {
                document.getElementById('child-info').innerHTML = `<h2>Child Info: ${childName} (Age: ${childAgeYear} Years, ${childAgeMonth} Months)</h2>`;
                document.getElementById('form-parenting').style.display = 'none';
            } else {
                alert('Please enter the child\'s name.');
                return;
            }
        } else {
            document.getElementById('child-info').innerHTML = `<h2>Dashboard for: ${selectedCategory.replace('_', ' ')}</h2>`;
        }

        let dashboardIcons = '';

        if (selectedCategory === 'parenting') {
            dashboardIcons = `
                <div class="icon">
                    <a href="https://parenting.com" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3471/3471725.png" alt="Parenting Tips">
                        <p>Parenting Tips</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://familydoctor.org" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921827.png" alt="Health Care">
                        <p>Health Care</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://babysleep.com" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/2119/2119024.png" alt="Baby Sleep">
                        <p>Baby Sleep Tips</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://childbehavior.com" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3634/3634825.png" alt="Child Behavior">
                        <p>Child Behavior</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://nutrition.com" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3504/3504793.png" alt="Child Nutrition">
                        <p>Child Nutrition</p>
                    </a>
                </div>`;
        } else if (selectedCategory === 'pregnant_mother') {
            dashboardIcons = `
                <div class="icon">
                    <a href="https://www.halodoc.com/kesehatan/kehamilan" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/2660/2660446.png" alt="Pregnancy Consultation">
                        <p>Pregnancy Consultation</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://id.theasianparent.com/kehamilan" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/4021/4021660.png" alt="Pregnancy Tips">
                        <p>Pregnancy Tips</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://www.babycenter.com/pregnancy" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3076/3076594.png" alt="Pregnancy Stages">
                        <p>Pregnancy Stages</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://nutrition.org/pregnancy" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3408/3408353.png" alt="Pregnancy Nutrition">
                        <p>Pregnancy Nutrition</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://www.whattoexpect.com/pregnancy" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3759/3759783.png" alt="What to Expect">
                        <p>What to Expect</p>
                    </a>
                </div>`;
        } else if (selectedCategory === 'pregnancy_program') {
            dashboardIcons = `
                <div class="icon">
                    <a href="https://www.verywellfamily.com/preconception-checklist-what-to-do-before-you-try-to-get-pregnant-4156721" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/1313/1313835.png" alt="Pregnancy Program Consultation">
                        <p>Consultation of Pregnancy Program</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://www.fertilitytips.com/" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3759/3759850.png" alt="Fertility Tips">
                        <p>Fertility Tips</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://ovulation-calendar.com" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="Ovulation Calendar">
                        <p>Ovulation Calendar</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://www.babycenter.com/fertility" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/2336/2336342.png" alt="Fertility Nutrition">
                        <p>Fertility Nutrition</p>
                    </a>
                </div>
                <div class="icon">
                    <a href="https://www.plannedparenthood.org/learn/pregnancy" target="_blank">
                        <img src="https://cdn-icons-png.flaticon.com/512/3076/3076594.png" alt="Planned Parenthood">
                        <p>Planned Parenthood</p>
                    </a>
                </div>`;
        }
        document.getElementById('dashboard-icons').innerHTML = dashboardIcons;
        document.getElementById('dashboard').style.display = 'block';
    }

    function goBack() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('category-selection').style.display = 'block';
        document.getElementById('form-parenting').style.display = 'none';
        selectedCategory = '';
    }
</script>

</body>
</html>

