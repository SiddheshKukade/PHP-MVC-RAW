<?php
print_r("Errors =>");
// var_dump($errors);
?>
<div class="container">
    <br/>
    <h1 class="display-1">Register page</h1>
    <br/>
    <form method="post" action="/register">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input name="name" type="name" class="form-control" id="exampleInputEmail1" />
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1"c   ` aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Password again</label>
            <input name="passwordConfirm" type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>