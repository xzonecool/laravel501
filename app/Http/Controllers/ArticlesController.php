<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index(){
    	return __METHOD__ .'은(는)ariticle 컬렉션을 조회합니다.';
    }
     public function create(){
    	return __METHOD__ .'은(는)ariticle 컬렉션을 만들기 위한 폼을 반환합니다.';
    }
     public function store(Request $request){
    	return __METHOD__ .'은(는) 사용자 폼에 입력한 폼 데이터를 새로운 ariticle 컬렉션을 만듭니다.';
    }
     public function show($id){
    	return __METHOD__ .'은(는) 다음 기본 키를 가진 ariticle 모델을 조회합니다.'.$id; 
    }
     public function edit($id){
    	return __METHOD__ .'은(는) 다음 기본 키를 가진 ariticle 모델을 수정하기 위한 폼을 담은 뷰를 반환합니다'.$id ;
    }
     public function update(Request $request, $id){
    	return __METHOD__ .'은(는) 사용자의 입력한 폼 데이터로 다음 기본키를 가진 ariticle 모델을 수정합니다.'.$id;

    }
     public function destory($id){ 
    	return __METHOD__ .'은(는) 다음 기본 키를 가진 ariticle 모델을 삭제합니다.'.$id;
    }
}
