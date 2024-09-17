<?php
// подлкючаю стили и скрипты

function AddVue() {
    ?>
    <script src="<? echo plugins_url( '/assets/libraris/vue/Vue.js',__FILE__ ); ?>"></script>
    
    <? // <script>console.log("Vue script installed ...");</script>
}
add_action( 'wp_head', 'AddVue' );    // подключаю поддержку на клиенте
add_action( 'admin_head', 'AddVue' ); // подключаю поддержку в админке