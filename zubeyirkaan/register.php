<!DOCTYPE html>
<html>
<head>
    <title>Select courses</title>
    <style>
        /* Customizing the selection box */
       body {
            background-color: #79aeeb8c;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo {
            text-align: center;
            margin-bottom: auto;
        }

        .logo img {
            width: 200px;
        }

        .user {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .user img {
            width: 200px;
        }

        .user-info {
            margin-left: 10px;
        }

        .nav {
            background: #ffffff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav i {
            font-size: 25px;
            padding: 10px 20px;
            color: #31398E;
            border: none;
            cursor: pointer;
        }

        .custom-select {
            position: relative;
            display: inline-block;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ddd;
            padding: 10px;
            border-radius: 4px;
            width: 450px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        .custom-select select {
            display: none; /* Hide the default select box */
        }

        .select-selected {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }

        .select-selected:after {
            content: '\25BE'; /* Display a down arrow */
            margin-left: 5px;
        }

        .select-selected:focus,
        .select-selected:hover {
            outline: none;
            border-color: #999;
        }

        .select-items {
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 4px;
            z-index: 9999;
            top: 100%;
            left: 0;
            right: 0;
            max-height: 150px;
            overflow-y: auto;
            display: none; /* Hide the options by default */
        }

        .select-items div {
            padding: 10px;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        .select-items div:hover {
            background-color: #f4f4f4;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 5px;
        }

        /* Additional styles for the selected options list */
        #selectedOptions {
            list-style-type: none;
            padding-left: 0;
            width: 450px;
            margin-left: 0;
            border: 10px solid #ccc;
            border-radius: 4px;
        }

        #selectedOptions li {
            margin-bottom: 5px;
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
        }

        .remove-button {
            margin-left: 10px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .comment-section {
            margin-top: 20px;
            width: 450px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
        }

        .comment-section textarea {
            width: 100%;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        .comment-section button {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .border {
            width: 480px;
            margin: 0 auto;
            padding: 55px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 10px;
    
        }
        
        .bordermain {
            width: 680px;
            margin: 0 auto;
            padding: 55px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 10px;
    
        }

        
        
    </style>
</head>
<body>
    <div class = "bordermain">
        <nav class="nav">
        <button class="logout-btn"><i class='bx bx-log-out'>Log Out</i></button>
        </nav>
        <div class="container">
            <br/>
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <h1>European University of Lefke</h1>
            <br/>
            
            <div class="logged-user" style="background-color: #ffffff; 
            padding: 10px; border: 1px solid #ccc; border-radius: 10px;  margin-top: 10px; width: 572px;">
                <div class = "user">
                    <img src="user.png" alt="user">
                </div>
                <?php
                // Check if the request method is POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve the student information from the form data
                    $studentInfo = $_POST["studentInfo"];

                    // Return a response (e.g., echo the student information)
                    echo /*"Received student information: " .*/ $studentInfo;
                }
                ?>
    </div>

    </br>
    <div class="border">
                <h1>Select courses</h1>
                
                <div class="custom-select">
                    <button type="submit" style="float:right; width: 80px; height: 40px; background-color: #0eed1d; color: white;"id="addButton">Add</button> 
                    <div class="select-selected">Select courses</div>
                    <div class="select-items">
                        <div data-value="ENGG434 ENGINEERING ETHICS">ENGG434 ENGINEERING ETHICS</div>
                        <div data-value="EE431 PRINCIPLES OF DIGITAL IMAGE PROCESSING">EE431 PRINCIPLES OF DIGITAL IMAGE PROCESSING</div>
                        <div data-value="COMP448 ARTIFICIAL NEURAL NETWORKS">COMP448 ARTIFICIAL NEURAL NETWORKS</div>
                        <div data-value="COMP337 DATABASE MANAGEMENT SYSTEMS">COMP337 DATABASE MANAGEMENT SYSTEMS</div>
                        <div data-value="ECON413 ENGINEERING ECONOMICS">ECON413 ENGINEERING ECONOMICS</div>
                        <div data-value="COMP471 JAVA PROGRAMMING">COMP471 JAVA PROGRAMMING</div>
                        <div data-value="BUSN411 STRATEGIC PLANNING AND MANAGEMENT">BUSN411 STRATEGIC PLANNING AND MANAGEMENT</div>
                        <div data-value="COMP465 ADVANCED COMPUTER GRAPHICS">COMP465 ADVANCED COMPUTER GRAPHICS</div>
                        <div data-value="COMP 415 ARTIFICIAL INTELLIGENCE">COMP 415 ARTIFICIAL INTELLIGENCE</div>
                        <div data-value="COMP364 PRINCIPLES OF PROGRAMMING LANGUAGES">COMP364 PRINCIPLES OF PROGRAMMING LANGUAGES</div>
                    </div>
                </div>
                
            </div>

            <br/>

            <div class="border">
                <h2>Selected Options:</h2>
                <ul id="selectedOptions"></ul>
            </div>

            
            <br/>
            <div class = "border">
                <h2> Comment Section </h2>
                <div class="comment-section">
                    <form id="commentForm">
                        <textarea name="comment" placeholder="Write your comment here"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
  var selectBox = document.querySelector('.custom-select');
  var selectedOptionsList = document.getElementById("selectedOptions");
  var selectItems = document.querySelectorAll('.select-items div:not(.selected)');
  var addButton = document.getElementById("addButton");

  // Toggle visibility of the select items
  selectBox.addEventListener("click", function() {
    this.querySelector('.select-items').style.display = this.querySelector('.select-items').style.display === 'none' ? 'block' : 'none';
  });

  // Event listener for the select box items
  selectItems.forEach(function(item) {
    item.addEventListener("click", function() {
      var clickedOption = this.dataset.value;
      selectBox.value = clickedOption;
      selectBox.querySelector('.select-selected').textContent = clickedOption;
      selectBox.querySelector('.select-items').style.display = 'none';
    });
  });

  // Remove a selected option from the list
  selectedOptionsList.addEventListener("click", function(event) {
    if (event.target.classList.contains("remove-button")) {
      var listItem = event.target.parentElement;
      selectedOptionsList.removeChild(listItem);

      // Reset the select box
      selectBox.value = "";
      selectBox.querySelector('.select-selected').textContent = "Select Course";
    }
  });

  // Add button click event
  addButton.addEventListener("click", function() {
    var selectedOption = selectBox.value;
    if (selectedOption !== "") {
      var selectedOptions = selectedOptionsList.querySelectorAll('li');
      var optionExists = false;
      selectedOptions.forEach(function(option) {
        if (option.dataset.value === selectedOption) {
          optionExists = true;
        }
      });

      if (optionExists) {
        // Display an alert for option already selected
        alert("Option already selected");
      } else if (selectedOptions.length >= 5) {
        // Display an alert for maximum selections reached
        alert("Maximum selections reached");
      } else {
        // Add the selected option to the list
        var listItem = document.createElement("li");
        listItem.dataset.value = selectedOption;
        listItem.innerHTML = selectedOption + '<button class="remove-button">Remove</button>';
        selectedOptionsList.appendChild(listItem);

        // Reset the select box
        selectBox.value = "";
        selectBox.querySelector('.select-selected').textContent = "Select Course";
      }

      // Hide the select items
      selectBox.querySelector('.select-items').style.display = 'none';
    }
  });

  // Logout button click event
  var logoutBtn = document.querySelector('.logout-btn');
  logoutBtn.addEventListener('click', function() {
    // Perform logout operations here
    window.location.href = 'login.html'; // Redirect to the login page
  });
});
var commentForm = document.getElementById("commentForm");
        commentForm.addEventListener("submit", function(event) {
            event.preventDefault();
            var commentTextarea = commentForm.querySelector("textarea");
            var comment = commentTextarea.value.trim();

            if (comment !== "") {
                var email = "zubeyirkaan@gmail.com";
                var subject = "New Comment";
                var body = "A new comment has been submitted:\n\n" + comment;

                // Construct the mailto URL
                var mailtoURL = "mailto:" + email + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);

                // Open the default email client with the mailto URL
                window.location.href = mailtoURL;

                // Reset the comment textarea
                commentTextarea.value = "";
            }
        });


    </script>
</body>
</html>