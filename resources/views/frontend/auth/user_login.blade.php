<div class="user_login">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        @method('POST')

        <input type="text" value="2" hidden>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email address" />

        <br />

        <label>Password</label>
        <input type="password" name="password" />
        <br />

        <div class="checkbox">
            <input id="remember" type="checkbox" />
            <label for="remember">Remember me on this computer</label>
        </div>

        <div class="action_btns">
            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>
                    Back</a></div>
            <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
        </div>
    </form>

    <a href="#" class="forgot_password">Forgot password?</a>
</div>
