<?php
namespace Services;


interface PostService
{
    public function all($page,$limit=50);


    public function show($id);

}
