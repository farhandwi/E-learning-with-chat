# website-elearning

<h3> Konfigurasi Project </h3>
<ol>
    <li>Copy file <b>.env.example</b> rename menjadi <b>.env</b></li>
    <li>Buat nama database pada file <b>.env</b> <code> DB_DATABASE=elearning </code></li>
    <li>Setelah membuat database, Buka terminal lalu masuk ke folder project web-elearning</li>
    <li>Lalu masukan <code> FILESYSTEM_DRIVER=public </code> ke <b> .env </b> </li>
    <li>Lalu ketikan <code> php artisan migrate </code> enter, setelah berhasil ketikan <code>php artisan storage:link</code> enter</li>
    <li>Setelah itu setup email untuk verifikasi lupa password pada file <b>.env</b></li>
    <code>
        MAIL_MAILER=smtp
    </code> <br>
    <code>
        MAIL_HOST=smtp.gmail.com
    </code> <br>
    <code>
        MAIL_PORT=465
    </code> <br>
    <code>
        MAIL_USERNAME=youremail@gmail.com
    </code> <br>
    <code>
        MAIL_PASSWORD=yourpassword
    </code> <br>
    <code>
        MAIL_ENCRYPTION=ssl
    </code> <br>
    <code>
        MAIL_FROM_ADDRESS=elarning@noreply.com
    </code> <br>
    <code>
        MAIL_FROM_NAME="${APP_NAME}"
    </code>
    <li>Lalu buat key app nya dengan cara <code> php artisan key:generate </code> </li>
    <li>Setelah itu download semua package dengan cara <code> composer install </code> </li>
    <li>
        Setelah step diatas sudah berhasil semua tinggal kita memasukan data dummy nya dengan cara
        <ul>
            <li>Ketik diterminal <code>php artisan tinker</code> setelah itu masukan code dibawah</li>
            <h4>Factory/Dummy Dosen</h5>
                <li>
                    <code>
                        Dosen::factory()->count(50)->create();
                    </code>
                </li>
                <h4>Factory/Dummy Mahasiswa</h5>
                    <li>
                        <code>
                            Mahasiswa::factory()->count(400)->create();
                        </code>
                    </li>
        </ul>
    </li>
    <li>Setelah berhasil, masukan data-data nya dengan cara <code> php artisan db:seed </code> pada terminal lalu enter</li>
    <li>Buka website liveware dan buka dokumentasinya, atau ketik <code> composer require livewire/livewire </code></li>
    <li>Buka website pusher dan buat akun serta buat aplikasi, kemudian cari "App Keys" pada side bar dan kemudian copy paste ke file .env anda 
    <code>
    PUSHER_APP_ID=your-pusher-app-id
    PUSHER_APP_KEY=your-pusher-key
    PUSHER_APP_SECRET=your-pusher-secret
    PUSHER_APP_CLUSTER=mt1
    </code></li>
    <li>Kemudian ketik <code>composer require pusher/pusher-php-server</code> pada terminal</li>
    <li>Setelah berhasil, ketik <code>npm install --save-dev laravel-echo pusher-js</code></li>
    <li>Terakhir jalankan server nya <code> php artisan serve </code></li>
    <li>dan buka url nya diweb browser <code> http://127.0.0.1:8000 </code></li>
</ol>

<h1>Data Login 🔐</h1>

</ul>
<table border="1px" cellspacing="0" cellpadding="5px">
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Level</th>
    </tr>
    <tr>
        <td>admin@gmail.com</td>
        <td>password</td>
        <td>Admin</td>
    </tr>
    <tr>
        <td>dosen@gmail.com</td>
        <td>password</td>
        <td>Dosen</td>
    </tr>
    <tr>
        <td>mahasiswa@gmail.com</td>
        <td>password</td>
        <td>Mahasiswa</td>
    </tr>
</table>
