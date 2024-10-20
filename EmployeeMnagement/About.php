<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Company</title>
    <style>
        body{
            background-color: skyblue;
        }
        img{
            height: 100px;
            width: 100px;
            border-radius: 50%;
            justify-content: top;
        }
        p{
            margin-left: 40px;
            padding-left: 40px;
            font-size: 20px;
            color: yellow;
            justify-content: center;
        }
        .rk{
            text-align: center;
            color: red;
        }
        .view {
            display: none;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: aliceblue;
        }
        .view.active {
            display: flex;
            flex-direction: column;
        }
        .course-container {
            display: flex;
            /* align-items: center; */
            margin-top: 0px;
            width: 100%;
            height: auto;
            background: yellowgreen;
        }
        .course {
            display: block;
            width: 100px;
            height: 50px;
            border: solid 1px red;
            margin: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 10px;
            cursor: pointer;
            color: red;
            font-size: 30px;
        }
        .semview {
            display: none;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .semview.active {
            display: flex;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }
        .course:hover .dropdown-content {
            display: block;
        }
        .semview{
            border:solid red 5px;
             cursor: pointer;
              width: 100%;
        }


        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
        background-color: #04AA6D;
        color: white;
        }

    </style>
</head>
<body>
    <img src="image/Screenshot_20210916_084355.jpg">
    <h1 class="rk">About company</h1>
    <p>A company is a type of business structure that is a separate legal entity from its owners.
    It's a complex business structure, with higher set-up and Administrative costs because of extra reporting requirements and
    Higher-level legal obligations.</p>
    
    <h2 class="rk">Company Development Detailes</h2>
    <p>Company development, or business development, is a strategic process that involves identifying and implementing ways to grow a company. 
The goal of business development is to make a company more successful, and it can involve a variety of objectives, such as:
    Increasing sales
    Expanding into new markets
    Forming strategic partnerships
    Improving profitability
    Innovating customer acquisition and retention methods
    Building relationships with leads
    Improving relationships with customers
    Delighting customers throughout the buyer's journey 
    Business development can impact every department of a company, including sales, marketing, manufacturing, human resources, accounting, finance, product development, and vendor management. 
    Business development strategies can include:
    Researching industry trends, competitors, and prospects
    Identifying growth opportunities
    Brainstorming strategies
    Experimenting
    Lead generation and qualification
    Prospecting
    Cross-departmental project management
    Partnership management
    Data analysis</p>
    <h1>Company Control Panel</h1>
    <label for="cars">Select Department Work:</label>
    <select id="cars" onchange="showContent(this.value)">
        <option value="IT">HR Manager</option>
        <option value="LAW">Manager</option>
        <option value="BUSINESS">employee</option>121   
    </select>
    <hr>

    <div class="view active" id="IT">
        <div class="course-container">
            <div class="course">About
                <div class="dropdown-content">
                    <a href="#"  onclick="Semester('semester1')">Breif Note</a>
                    <a href="#">Salary</a>
                    <a href="#">Qualification</a>
                  </div>
            </div>
            <div class="course" >Work
                <div class="dropdown-content">
                    <a href="#" onclick="Semester('semester2')">Talent acquisition</a>
                    <a href="#">Training and development</a>
                    <a href="#">Analytics</a>
                  </div>
            </div>
        </div>
        <hr color="red" width="100%">
    

    

    <div class="semview" id="semester1"  >
        <div class="maincontainer">
            <h2>Hr manager</h2>
            <p><pre>An HR manager deals with a complete range of HR activities. Depending upon the organisation, an HR manager’s role is categorised into learning and development, recruitment or employee relations. 
                However, the core responsibilities of a human resource manager are:

            Developing and implementing the HR strategies and initiatives designed for the overall business plan.
            Coordinating and supervising the work of the HR team.
            Communicating with other department heads to know about their staff and training requirements.
            Designing job descriptions and revising them periodically.
            Heading recruitment, interviews, hiring and training procedures.
            Handling the exit interviews to examine the shortcomings of both the employee and the organisation.
            Creating, maintaining, and revisiting company policies and employment laws.</pre></p>
    

<!-- <table>
  <tr>
    <th>Enrollment NO.</th>
    <th>Name</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td><input type="checkbox" name="status" value="present" ></td>
  </tr>
  
</table> -->
    </div>

    </div>


    <div class="semview" id="semester2" style="border:solid red 5px; cursor: pointer; width: 100%;">HR managers recruit, interview, and hire new employees. They also establish an onboarding process for new hires.</div>


</div>


    <div class="view" id="LAW">
        <h1>This page is Blank</h1>
    </div>

    <div class="view" id="BUSINESS">
        <h1>This page is Empty</h1>
    </div>
    <script>
        function showContent(id) {
            var contents = document.querySelectorAll('.view');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }

        function Semester(id) {
            var contents = document.querySelectorAll('.semview');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }
    </script>
</body>
</html>