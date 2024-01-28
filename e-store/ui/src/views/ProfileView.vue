<template>
    <body>
        <div class="container-fluid light-style container-p-y bg-dark">
            <h4
                class="font-weight-bold text-center text-white"
                style="padding: 25px"
            >
                Account settings
            </h4>
            <div
                class="container-fluid card overflow-hidden bg-dark"
                style="min-height: 80vh"
            >
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div
                            class="list-group list-group-flush account-settings-links"
                        >
                            <a
                                class="list-group-item list-group-item-action bg-dark text-white"
                                data-toggle="list"
                                href="#account-general"
                                >General</a
                            >
                            <a
                                class="list-group-item list-group-item-action bg-dark text-white"
                                data-toggle="list"
                                href="#account-change-password"
                                >Change password</a
                            >
                            <a
                                class="list-group-item list-group-item-action bg-dark text-white"
                                data-toggle="list"
                                href="#account-info"
                                >Info</a
                            >

                            <a
                                class="list-group-item list-group-item-action bg-dark text-white"
                                data-toggle="list"
                                href="#account-connections"
                                >Connections</a
                            >
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div
                                class="tab-pane fade active show"
                                id="account-general"
                            >
                                <div class="card-body media align-items-center">
                                    <img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        alt
                                        class="d-block ui-w-80"
                                    />
                                    <div class="media-body ml-6">
                                        <label class="btn btn-dark">
                                            Upload new photo
                                            <input
                                                type="file"
                                                class="account-settings-fileinput"
                                            />
                                        </label>
                                        &nbsp;
                                        <button
                                            type="button"
                                            class="btn btn-dark md-btn-flat"
                                        >
                                            Reset
                                        </button>
                                        <div class="blockquote-footer">
                                            Allowed JPG, GIF or PNG. Max size of
                                            800K
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-light m-0" />
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Username</label
                                        >
                                        <input
                                            v-model="user.name"
                                            type="text"
                                            class="form-control mb-1"
                                            placeholder="nmaxwell"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Name</label
                                        >
                                        <input
                                            v-model="user.email"
                                            type="text"
                                            class="form-control"
                                            placeholder="Nelle Maxwell"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >E-mail</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control mb-1"
                                            value=""
                                            placeholder="nmaxwell@mail.com"
                                        />
                                        <div
                                            class="alert alert-warning mt-3 text-white bg-dark"
                                        >
                                            Your email is not confirmed. Please
                                            check your inbox.<br />
                                            <a href="javascript:void(0)"
                                                >Resend confirmation</a
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Male</label
                                        >
                                        <br />
                                        <div
                                            class="form-check form-check-inline"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio1"
                                                value="option1 "
                                                style="padding-left: 15px"
                                            />
                                            <label
                                                class="form-check-label text-white"
                                                for="inlineRadio1"
                                                style="padding-left: 15px"
                                            >
                                                female</label
                                            >
                                        </div>
                                        <div
                                            class="form-check form-check-inline"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio2"
                                                value="option2"
                                                style="padding-left: 15px"
                                            />
                                            <label
                                                class="form-check-label text-white"
                                                for="inlineRadio2"
                                                style="padding-left: 15px"
                                                >Male</label
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="account-change-password"
                            >
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Current password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >New password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Repeat new password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Birthday</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            value=""
                                            placeholder="May 3, 1995"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Country</label
                                        >
                                        <select class="form-select">
                                            >
                                            <option>Syria</option>
                                            <option selected>oman</option>
                                            <option>Iraq</option>
                                            <option>Jordn</option>
                                            <option>UAE</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="border-light m-0" />
                                <div class="card-body pb-2">
                                    <h6 class="mb-4 text-white">Contacts</h6>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Phone</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            value=""
                                            placeholder="+0 (963) 956 7891"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-white"
                                            >Address</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            value=""
                                            placeholder="Syria/Damascus/Masakn Barzeh"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-connections">
                                <div class="card-body">
                                    <button
                                        type="button"
                                        class="btn btn-twitter text-white btn-dark"
                                    >
                                        Connect to <strong>Email</strong>
                                    </button>
                                </div>
                                <hr class="border-light m-0" />

                                <hr class="border-light m-0" />
                                <div class="card-body">
                                    <button
                                        type="button"
                                        class="btn btn-facebook text-white btn-dark"
                                    >
                                        Connect to <strong>Phone Number</strong>
                                    </button>
                                </div>
                                <hr class="border-light m-0" />
                                <div class="card-body">
                                    <button
                                        type="button"
                                        class="btn btn-instagram text-white btn-dark"
                                    >
                                        Connect to <strong>Address</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button
                    type="button"
                    class="btn btn-primary btn-dark"
                    style="padding: 15px"
                >
                    Save changes</button
                >&nbsp;
                <button
                    type="button"
                    class="btn btn-default btn-dark"
                    style="padding: 15px"
                >
                    Cancel
                </button>
            </div>
        </div>
    </body>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return { user: {} };
    },
    methods: {
        getprofile() {
            const token = window.localStorage.getItem("token");
            axios({
                method: "get",
                url: "http://127.0.0.1:8000/api/get/profile",
                headers: { Authorization: `Bearer ${token}` },
            })
                .then((response) => {
                    this.user = response.data;
                })
                .catch(function (error) {
                    window.alert(error.response);
                    console.log(error);
                });
        },
    },
    mounted() {
        this.getprofile();
    },
};
</script>
<style scoped>
body {
    height: 100vh;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}
.ui-w-80 {
    width: 80px !important;
    height: auto;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
}

.account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
}

.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}

html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}

.account-settings-multiselect ~ .select2-container {
    width: 100% !important;
}

.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}

.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}

.material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}

.material-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}

.dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}

.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}

.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}

.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
</style>
