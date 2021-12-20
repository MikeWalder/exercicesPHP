<nav>
    <img src="images/logo.png" alt="Logo" width="45" height="30">
    <ul>
        <li><a href="exo1.php">Exo 1</a></li>
        <li><a href="exo2.php">Exo 2</a></li>
        <li><a href="exo3.php">Exo 3</a></li>
        <li><a href="exo4.php">Exo 4</a></li>
    </ul>
</nav>

<style>
    body {
        margin: 0;
        padding: 0;
    }
    h1 {
        text-align: center;
        text-decoration: underline;
    }
    nav {
        position: sticky;
        background-color: #283645;
    }
    nav img {
        float: left;
        margin-left: 20px;
        margin-top: 20px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        padding-left: 30%;
    }
    li {
        float: left;
    }
    li a {
        color: white;
        padding: 20px;
        text-decoration: none;
        display: block;
        font-size: 22px;
        transition: all 0.4s;
    }
    li a:hover {
        background-color: #1491D7;
        color: lightgoldenrodyellow;
    }
</style>