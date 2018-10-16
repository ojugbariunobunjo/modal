<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Style the tab */

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */

        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */

        .tab button.active {
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="tab">
        <!--<form action="" method="post">-->
        <!-- Tab links -->

        <button class="tablinks" onclick="openCity(event, 'London')">London</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
    </div>

    <!-- Tab content -->
    <form action="welcome.php" method="post">
        <div id="London" class="tabcontent">
            <h3>London</h3>
			name<input type="text" name ="london">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
			
            <p>London is the capital city of England.</p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae accusamus debitis, rerum inventore, provident ratione itaque
            cumque fugit officiis harum corporis expedita quisquam! Consequatur nesciunt ullam accusantium quam natus magni!
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam impedit nam, ratione delectus, facilis, incidunt
                accusamus maxime sint consectetur voluptate dolore numquam soluta error amet sed. Molestiae, sed tempore!
                Temporibus.

            </p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
			name<input type="text" name ="paris">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
			name<input type="text">
			<br>
            <p>Paris is the capital of France.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores deserunt esse repellat consequatur magni
                voluptatem possimus, quisquam deleniti aliquam necessitatibus accusantium repudiandae aspernatur dicta veritatis
                ducimus non pariatur blanditiis cupiditate.

            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut impedit aliquam veritatis dolorum corrupti dolorem
                asperiores voluptates consequatur veniam. Incidunt, error. Fugiat quis cupiditate dolore beatae aut autem
                deleniti tenetur?</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
			name<input type="text" name ="tokyo">
			<br>
			name<input type="text">
			<br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quis illum rerum quia quaerat, dolore eos cumque aliquam
                laudantium delectus dolor ut nam soluta, sequi sapiente optio? Asperiores, officia omnis!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia adipisci praesentium fuga explicabo, laudantium
                voluptates temporibus. Amet ut alias rerum rem? Quasi in minima commodi numquam doloribus aut exercitationem
                itaque.</p>

            <!--</form>-->
        </div>
		<input type="submit">
    </form>
    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>
</body>

</html>