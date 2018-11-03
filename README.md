# YangMingSystem

修改工具包內laravel的 Timestamp defalut 設定
設定為自動帶time，可以避免還要帶入時間參數。

\vendor\laravel\framework\src\Illuminate\Database\Schema\Blueprint.php

timestamps fumction ->       959 961 行更改   
$this->timestamp('created_at', $precision)->default(\DB::raw('CURRENT_TIMESTAMP(0)'));

$this->timestamp('updated_at', $precision)->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

安裝步驟
1. composer install
2. 設定 .env 對應db
3. php artisan migrate
4. php artisan db:seed 

