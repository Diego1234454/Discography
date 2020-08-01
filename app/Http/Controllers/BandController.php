<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class BandController extends Controller
{
    //BANDAS
    public function BandStore()
    {
        $collection = (new MongoDB\Client)->Discografia->Bands;
        $bandCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $bands = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 24]);  
        return view('Discography.bands', ['bands' => $bands, 'bandCount' => $bandCount]);
    }



    //ADMIN
    
        public function Index() {
            $collection = (new MongoDB\Client)->Discografia->Bands;
            $bands = $collection->find();  
            return view('Admin.Bands.index', ['bands' => $bands]);
    
        }

        public function Show($id) {
            $collection = (new MongoDB\Client)->Discografia->Bands;
            $bands = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
    
            return view('admin.Bands.details', [ "bands" => $bands ]);
        }

        public function Create() {
            $collection = (new MongoDB\Client)->FiveDStore->Categories;
            $category = $collection->find();
            return view('admin.Bands.create', [ "categories" => $category ]);
        }

        public function Store() {
            $bands = [
                "band_name" => request("band_name"),
                "formed" => request("formed"),
                 // "Artist" => request("Artis"),
                 // "price" => request("price"),
                // "currency" => request("currency"),
                // "specification" => [],
                // "rating" => [],
                // "comments" => []
            ];
            $collection = (new MongoDB\Client)->Discografia->Bands;
            $insertOneResult = $collection->insertOne($bands);
            return redirect("/admin/bands");
        }

        public function Edit($id) {
            $collection = (new MongoDB\Client)->Discografia->Bands;
            // $collectionC = (new MongoDB\Client)->FiveDStore->Categories;
            // $categories = $collectionC->find();
            $bands = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
            return view('Admin.Bands.edit', [ "bands" => $bands]);
        }    
        // , "categories" => $categories
        public function Update(){
            $collection = (new MongoDB\Client)->Discografia->Bands;
            $bands = [
                "band_name" => request("band_name"),
                "formed" => request("formed"),
                "origin" => request("origin")
                 // "price" => request("price"),
                // "currency" => request("currency"),
                // "specification" => [],
                // "rating" => [],
                // "comments" => []
            ];
            $updateOneResult = $collection->updateOne([
                "_id" => new \MongoDB\BSON\ObjectId(request("bandid"))
            ], [
                '$set' => $bands
            ]);
            return redirect('/admin/bands/'.request("bandid"));
        }
    
        public function Delete($id) {
            $collection = (new MongoDB\Client)->Discografia->Bands;
            // $collectionC = (new MongoDB\Client)->FiveDStore->Categories;
            // $categories = $collectionC->find();
            $bands = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
            return view('Admin.Bands.delete', [ "bands" => $bands]);
        }
        // , "categories" => $categories
        
            public function Remove(){
                $collection = (new MongoDB\Client)->Discografia->Bands;
                $deleteOneResult = $collection->deleteOne([
                    "_id" => new \MongoDB\BSON\ObjectId(request("bandid"))
                ]);
                return redirect('/admin/bands/');
            }
}


