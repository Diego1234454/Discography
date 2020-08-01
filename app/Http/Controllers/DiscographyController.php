<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class DiscographyController extends Controller
{
    //ALBUMES
    public function Discography()
    {
        $collection = (new MongoDB\Client)->Discografia->Albums;
        $albumCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $albums = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Discography.index', ['albums' => $albums, 'albumCount' => $albumCount]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Discografia->Albums;
        $album = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Discography.details', [ "album" => $album]);
    }

    //ADMIN
    
        public function Index() {
            $collection = (new MongoDB\Client)->Discografia->Albums;
            $albumsA = $collection->find();  
            return view('Admin.Disco.index', ['albumsA' => $albumsA]);
    
        }

        public function Show($id) {
            $collection = (new MongoDB\Client)->Discografia->Albums;
            $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
    
            return view('admin.Disco.details', [ "album" => $album ]);
        }

        public function Create() {
            $collection = (new MongoDB\Client)->FiveDStore->Categories;
            $category = $collection->find();
            return view('admin.Disco.create', [ "categories" => $category ]);
        }

        public function Store() {
            $AlbumS = [
                "Album" => request("Album"),
                "Artist" => request("Artist"),
                "Year" => request("Year"),
                // "price" => request("price"),
                // "currency" => request("currency"),
                // "specification" => [],
                // "rating" => [],
                // "comments" => []
            ];
            $collection = (new MongoDB\Client)->Discografia->Albums;
            $insertOneResult = $collection->insertOne($AlbumS);
            return redirect("/admin/disco");
        }

        public function Edit($id) {
            $collection = (new MongoDB\Client)->Discografia->Albums;
            // $collectionC = (new MongoDB\Client)->FiveDStore->Categories;
            // $categories = $collectionC->find();
            $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
            return view('Admin.Disco.edit', [ "album" => $album]);
        }    
        // , "categories" => $categories
        public function Update(){
            $collection = (new MongoDB\Client)->Discografia->Albums;
            $album = [
                "Album" => request("Album"),
                "Artist" => request("Artist"),
                "Year" => request("Year"),
                // "price" => request("price"),
                // "currency" => request("currency"),
                // "specification" => [],
                // "rating" => [],
                // "comments" => []
            ];
            $updateOneResult = $collection->updateOne([
                "_id" => new \MongoDB\BSON\ObjectId(request("albumid"))
            ], [
                '$set' => $album
            ]);
            return redirect('/admin/disco/'.request("albumid"));
        }
    
        public function Delete($id) {
            $collection = (new MongoDB\Client)->Discografia->Albums;
            // $collectionC = (new MongoDB\Client)->FiveDStore->Categories;
            // $categories = $collectionC->find();
            $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
            return view('Admin.Disco.delete', [ "album" => $album]);
        }
        // , "categories" => $categories
        
            public function Remove(){
                $collection = (new MongoDB\Client)->Discografia->Albums;
                $deleteOneResult = $collection->deleteOne([
                    "_id" => new \MongoDB\BSON\ObjectId(request("albumid"))
                ]);
                return redirect('/admin/disco/');
            }
}