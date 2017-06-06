<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Восстановление пароля</h1>
    </div>
</div>

<div class="container">
    <div class="row">
       <div class="pass-recovery">
           <form action="#">
               <fieldset>
                   <label for="pr-1" class="custom-input-label">E-mail</label>
                   <input type="email" id="pr-1" class="custom-input" placeholder="Введите e-mail адрес">
               </fieldset>

               <button type="submit" class="btn btn-link btn-round btn--blue">Отправить</button>
           </form>
       </div>
    </div>


</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
