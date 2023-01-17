import { usePage } from "@inertiajs/inertia-react";
import React from "react";
import "../../css/style.css";
import Layout from "../Pages/Main/Layout.jsx";

const Home = () => {
    const { user } = usePage ().props.auth
    console.log("USER", user);
    return (
        // <>
        <Layout>
            <center>
                <b>
                    <br/>
                    <h1> SELAMAT DATANG DI SMKN 1 CIBINONG</h1>{" "}
                    { user?.kode_admin ?? user?.nis ?? user?.nip }
                </b>
            </center>
        </Layout>
        // </>
    );
};
export default Home;

    