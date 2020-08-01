<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class InconmmingController extends Controller
{
    
    public function incomingStore()
    {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $inCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $incoming = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 24]);  
        return view('Discography.incomming', ['incoming' => $incoming, 'inCount' => $inCount]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $incoming = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Discography.details', [ "incoming" => $incoming]);
    }

    //ADMIN
    
    public function Index() {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $IncomingA = $collection->find();  
        return view('Admin.Incommings.index', ['IncomingA' => $IncomingA]);

    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $incoming = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('admin.Incommings.details', [ "incoming" => $incoming ]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->FiveDStore->Categories;
        $category = $collection->find();
        return view('admin.Incommings.create', [ "categories" => $category ]);
    }

    public function Store() {
        $Incoming = [
            "release_name" => request("release_name"),
            "musician_name" => request("musician_name"),
            "release_year" => request("release_year"),
            // "price" => request("price"),
            // "currency" => request("currency"),
            // "specification" => [],
            // "rating" => [],
            // "comments" => []
        ];
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $insertOneResult = $collection->insertOne($Incoming);
        return redirect("/admin/incommings");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $incoming = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Incommings.edit', [ "incoming" => $incoming]);
    }    
    // , "categories" => $categories
    public function Update(){
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        $incoming = [
            "release_name" => request("release_name"),
            "musician_name" => request("musician_name"),
            "release_year" => request("release_year"),
            // "price" => request("price"),
            // "currency" => request("currency"),
            // "specification" => [],
            // "rating" => [],
            // "comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("incomingid"))
        ], [
            '$set' => $incoming
        ]);
        return redirect('/admin/incommings/'.request("incomingid"));
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->Discografia->Incoming;
        // $collectionC = (new MongoDB\Client)->FiveDStore->Categories;
        // $categories = $collectionC->find();
        $incoming = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Incommings.delete', [ "incoming" => $incoming]);
    }
    // , "categories" => $categories
    
        public function Remove(){
            $collection = (new MongoDB\Client)->Discografia->Incoming;
            $deleteOneResult = $collection->deleteOne([
                "_id" => new \MongoDB\BSON\ObjectId(request("incomingid"))
            ]);
            return redirect('/admin/incommings/');
        }
}
