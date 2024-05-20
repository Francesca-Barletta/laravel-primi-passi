


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="logo">Laravel</h2>
        <ul>
            <li><a href="/contacts">contacts</a></li>
            <li><a href="/blog">blog</a></li>
            <li><a href="/shop">shop</a></li>
            <li><a href="/login">login</a></li>
        </ul>
    </header>
    <main>
    <h1>HELLO Laravel!</h1>
    <p>This is my first proj with Laravel =)</p>
    </main>
  
</body>
</html>
<style>
    body{
        font-family: helvetica;
    }
    ul,ol,menu{
        list-style:none;
    }
    a{
        text-decoration:none;
        color: white;
    }
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    header{
        height:100px;
        width:100%;
        background-color: green;
        padding:30px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:50px;
    }
    .logo{
        color:white;
        font-size:30px;
    }
    ul{
        display:flex;
        justify-content:flex-end;
        gap:14px;

    }
    main{
        text-align:center;
    }
    h1{
        margin:100px;
    }
</style>