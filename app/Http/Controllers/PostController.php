<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PostController extends Controller
{
        public function index()
        {
            $listPosts = DB::table('posts')->get()->toArray();
            $listPosts=array_map(function($item){
                return (array) $item;
            },$listPosts);

            if ($listPosts) {
                return view('trangchu', ['listPosts' => $listPosts]);
            } else {

                return redirect()->route('themmoi')->with('error', 'chưa có danh sách list posts');

            }
        }
        public function add(){
            return view('themmoi');
        }
        public function add_save( Request $request){

            $tile= $request->input('tile');
            $content = $request->input('content');
            $check = DB::table('posts')->insert([
                'tile'=>$tile,
                'content'=>$content
            ]);
           if($check){
               return redirect()->route('listPosts')->with('success', 'thêm mới thành công');
           }
           else{
               return redirect()->route('themmoi')->with('error', 'Thêm mới thất bại');
           }


        }
        public function xemchitiet($id){

            $list_Posts = DB::table('posts')->select('posts.id' , 'posts.tile' ,'posts.content' ,'comments.content_comment')
                ->where('posts.id','=',$id)
                ->join('comments', 'posts.id', '=', 'comments.post_id')
                ->get()->toArray();
            $list_Posts=array_map(function($item){
                return (array) $item;
            },$list_Posts);
            if ($list_Posts){
                return view('post_chitiet', ['list_Posts' => $list_Posts]);
            }
            else{

                return redirect()->route('listPosts')->with('error', 'chưa có dữu liệu ở bảng comments có post_id ='.$id.'');

            }
        }
        public function add_comment(){
            return view('themmoi_comment');
        }
        public function  add_save_comment(Request $request){

           $content_comment = $request->input('content_comment');
            $post_id = $request->input('post_id');
              $check = DB::table('comments')->insert([
                'content_comment'=>$content_comment,
                'post_id'=>$post_id
            ]);
            if($check){
                return redirect()->route('listPosts')->with('success', 'thêm mới comment có id post ='.$post_id .' thành công');
            }
            else{
                return redirect()->route('themmoi_comment')->with('error', 'Thêm mới comment thất bại');
            }
        }
}
