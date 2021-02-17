mkdir %1 %2 %3
cd %1
mkdir Config Controllers Helpers Models Repositories Routes Services Views Migrations
cd Config
echo //Generated Config File>>%1.php
cd ..

cd Routes
echo ^<?php>>api.php
echo /*Generated Route File*/>>api.php
echo Route::group([^'namespace^'=^>^'App^\Modules^\%1^\Controllers^',^'prefix^'=^>^'%3^'],function(){>>api.php
echo });>>api.php


cd ..

IF [%2]==[] (
	echo "No Model Name"
	) 
ELSE (
cd Models
echo ^<?php>>%2.php
echo namespace App\Modules\%1\Models;>>%2.php
echo use Illuminate\Database\Eloquent\Model;>>%2.php

echo class %2 extends Model>>%2.php
echo {>>%2.php
   echo /*Generated Model*/>>%2.php
echo }>>%2.php
cd ..
cd Controllers
echo ^<?php>>%2Controller.php
echo namespace App\Modules\%1\Controllers;>>%2Controller.php
echo use Exception;>>%2Controller.php
echo use Illuminate\Http\Request;>>%2Controller.php
echo class %2Controller extends Controller>>%2Controller.php
echo {>>%2Controller.php
echo /*Generated Controller*/>>%2Controller.php
echo }>>%2Controller.php

mkdir API
cd API
echo ^<?php>>%2ControllerApi.php
echo namespace App\Modules\%1\Controllers\API;>>%2ControllerApi.php
echo use Exception;>>%2ControllerApi.php
echo use Illuminate\Http\Request;>>%2ControllerApi.php
echo class %2ControllerApi extends Controller>>%2ControllerApi.php
echo {>>%2ControllerApi.php
echo /*Generated Controller Api*/>>%2ControllerApi.php
echo }>>%2ControllerApi.php
cd ..
cd ..
)