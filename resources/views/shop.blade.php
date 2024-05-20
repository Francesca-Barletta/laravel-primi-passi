<body>
<header>
        <h2 class="logo">Shop</h2>
        <ul class="header-menu">
            <li><a href="/contacts">contacts</a></li>
            <li><a href="/blog">blog</a></li>
            <li><a href="/shop">shop</a></li>
            <li><a href="/login">login</a></li>
        </ul>
    </header>
<ul class="items">
    <li>item1</li>
    <li>item2</li>
    <li>item3</li>
    <li>item4</li>
    <li>item5</li>
    <li>item6</li>
</ul>
<a href="/" class="home">home</a>
</body>


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
    .header-menu{
        display:flex;
        justify-content:flex-end;
        gap:14px;

    }
    .items{
        margin:50px;
    }
    p{
        margin:30px;
    }
    .home{
        background-color:green;
        padding:12px;
        border-radius:6px;
        margin-left:30px;
    }
</style>