<style>
  /* Style the tab */
  div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  /* Style the buttons inside the tab */
  div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  div.tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  div.tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }
</style>

<div class="tab">
  <button class="tablinks" onclick="opentask(event, 'add_test')" id="defaultOpen">Add Test</button>
  <button class="tablinks" onclick="opentask(event, 'Counsellor')">Add Counsellor</button>
  <button class="tablinks" onclick="opentask(event, 'Add_institute')">Add Institute</button>
  <button class="tablinks" onclick="opentask(event, 'add_interests')">Add Interests</button>
</div>

<div id="add_test" class="tabcontent">
  <div class="container">
    <h2 align= "center">Test Update Page</h2>
    <p align= "center">Select type of the test, add question, its four options and the correct answer. </p>
    <form class="form-horizontal" method="POST" action="addtest.php">
      <label for="Testtype">Test type:</label>
      <div class="dropdown">
        <select name="name">
          <?php
          $result = query("Select * from test_types");
          foreach ($result as $values)
          {
            echo "<option value=".$values["Type_id"].">".$values["Name"]."</option>";
          }
          ?>
        </div>
        
        <div class="form-group">
          <label for="Question">Question:</label>
          <input required type="text" id="Question" name="Question" placeholder="Type the question here:"><br/>
        </div>
        
        <div class="form-group">
          <label for="opt1">Option 1:</label>
          <input required type="text" id="Opt1" name="opt1" placeholder="Enter option 1"><br/>
          <label for="opt2">Option 2:</label>
          <input required type="text" id="Opt2" name="opt2" placeholder="Enter option 2"><br/>
          <label for="opt3">Option 3:</label>
          <input required type="text" id="Opt3" name="opt3" placeholder="Enter option 3"><br/>
          <label for="opt4">Option 4:</label>
          <input required type="text" id="Opt4" name="opt4" placeholder="Enter option 4"><br><br/>
          <label for="answer">Option number of the Answer:</label>
          <input type="number" MIN="1" MAX="4" id="answer" name="answer" placeholder="Enter option number of the answer  e.g. 1"><br/>
        </div>
        <button type="submit" class="btn btn-default">Save</button>
        <button class="btn btn-default">Cancel</button>
      </form>
    </div>
  </div>

  <div id="Counsellor" class="tabcontent">
    <div class="container">
      <h2 align= "center">Counsellor Update Page</h2>
      <p align= "center">Add the details of the new Counsellor.</p>
      <form method="post" class="form-horizontal" action="addcounsellor.php">
        <div class="form-group">
          <label for="Cname">Name:</label>
          <input required type="text" id="Cname" name="Cname" placeholder="Enter name of the Counsellor here:"><br/>
        </div>

        <div class="form-group">
          <label for="Caddress">Address:</label>
          <textarea required id="Caddress" name="Caddress" placeholder="Enter Address of the Counsellor here:"></textarea><br/>
        </div>

        <label for="Cregion">Region:</label>
        <div class="dropdown">
          <select name="name">
            <?php
            $rslt = query("Select * from locations");
            foreach ($rslt as $values)
            {
              echo "<option value=".$values["Location_id"].">".$values["Place"]."</option>";
            }
            ?>
          </div>

          <div class="form-group">
            <label for="Cnumber">Number:</label>
            <input required type="Number" id="Cnumber" name="Cnumber" placeholder="Enter Number of the Counsellor here:">  <br/>
          </div>

          <div class="form-group">
            <label for="Cemail">Email:</label>
            <input required type="email" id="Cemail" name="Cemail" placeholder="Enter email id of the Counsellor here:"><br/>
          </div>

          <div class="form-group">
            <label for="Cemail_p">Paypal linked email:</label>
            <input required type="email" id="Cemail_p" name="Cemail_p" placeholder="Enter Paypal linked email id of the Counsellor here:"><br/>
          </div>
          <button type="submit" class="btn btn-default">Save</button>
          <button class="btn btn-default">Cancel</button>
        </form>
      </div>
    </div>

    <div id="Add_institute" class="tabcontent">
      <div class="container">
        <h2 align= "center">Institute Update Page</h2>
        <p align= "center">Add the details of the new Institute.</p>
        <form method="post" class="form-horizontal"  action="addinstitute.php">
          <div class="form-group">
            <label for="Iname">Name:</label>
            <input required type="text" id="Iname" name="Iname" placeholder="Enter name of the Institute here:"><br/>
          </div>

          <div class="form-group">
            <label for="Iaddress">Address:</label>
            <textarea required id="Iaddress" name="Iaddress" placeholder="Enter Address of the Institute here:"></textarea><br/>
          </div>

          <div class="form-group">
            <label for="Course&cutoff">Add a course and its cutoff:</label><BR>
            <label for="Course_Name">Course Name:</label>
            <div class="dropdown">
              <select name="name">
                <?php
                $rslt = query("Select * from branches");
                foreach ($rslt as $values) {
                  echo "<option value=".$values["Branch_id"].">".$values["Name"]."</option>";
                }
                ?>
              </div>
            </div>
            <div>
              <label for="cutoff">Cutoff:</label>
              <input type="number" min="35" max="100" id="cutoff" name="cutoff" placeholder="Enter Cutoff in % of the Course here:" required><br/>
            </div>

            <div class="form-group">
              <label for="Website">Website:</label>
              <input required type="text" id="Website" name="Website" placeholder="Enter Website of the Institute here:"><br/>
            </div>

            <div class="form-group">
              <label for="Contact">Contact:</label><BR>
              <label for="Iemail">Email:</label>
              <input required type="email" id="Iemail" name="Iemail" placeholder="Enter email id of the Institute here:"><br/>
              <label for="Inumber">Number:</label>
              <input required type="Number" id="Inumber" name="Inumber" placeholder="Enter Number of the Institute here:">  <br/>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <button class="btn btn-default">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    <div id="add_interests" class="tabcontent">
      <div class="container">
        <h2 align= "center">Interests Update Page</h2>
        <p align= "center">Enter the interest</p>
        <form method="POST" class="form-horizontal" action="addinterest.php">
          <div class="form-group">
            <label for="interest">Interest:</label>
            <input required type="text" id="Interest" name="Interest" placeholder="Enter Interest here:">  <br/>
          </div>
          <button type="submit" class="btn btn-default">Save</button>
        </form>     
      </div>
    </div>

    <script>
      function opentask(evt, TaskName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(TaskName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();
    </script>  