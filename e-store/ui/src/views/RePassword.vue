<template>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h3 class="text-center">Forgot Password?</h3>
                            <h4>You can reset your password here.</h4>
                            <div class="panel-body">
                                <form
                                    id="register-form"
                                    role="form"
                                    autocomplete="off"
                                    class="form"
                                    method="post"
                                >
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input
                                                id="password"
                                                name="password"
                                                placeholder="Password"
                                                class="form-control"
                                                type="password"
                                            />
                                        </div>
                                        <div class="qq">
                                            <input
                                                id="password"
                                                name="password"
                                                placeholder="RePassword"
                                                class="form-control"
                                                type="password"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            name="recover-submit"
                                            class="btn btn-lg btn-primary btn-block"
                                            value="Reset Password"
                                            type="submit"
                                        />
                                    </div>

                                    <input
                                        type="hidden"
                                        class="hide"
                                        name="token"
                                        id="token"
                                        value=""
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RePassword",
};
</script>
<style scoped>
.form-gap {
    padding-top: 70px;
}
qq. {
    padding: 0px 0px 0px 0px;
}
</style>
