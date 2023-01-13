<?php
namespace console\controllers;

use common\models\Product;
use Yii;
use yii\console\Controller;

class GetImageController extends Controller
{
    public function actionGetImages(){
        $list_product = Product::find()->all();
        foreach ($list_product as $key => $product){
            $list_images = json_decode($product->images);
            $imageNew = [];
            foreach ($list_images as $image){
                $content = file_get_contents($image);
                $filename = uniqid().'.jpg';
                $dirAlias = Yii::getAlias('@web_image');
                $dir="img";
                file_put_contents($dirAlias.DIRECTORY_SEPARATOR.$filename, $content);
                $imageNew[]=$dir.DIRECTORY_SEPARATOR.$filename;
            }
            $product->images=json_encode($imageNew);
            $product->save(false);
            echo "Done id=$product->id".PHP_EOL;
        }
    }
}