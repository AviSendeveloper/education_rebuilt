<?php 
    use App\Models\Category;
    $categoryModel = new Category;
    $categories = $categoryModel->categoryList();
?>
<div class="tweet-question">
        @if (Auth::check())
          <div class="tweet-question-heading tp-btn-register" data-id="model" data-target="#mymodel">
              <h4>Categories</h4>
          </div>
        @else
          <div class="tweet-question-heading tp-btn-register" id="modalBtn14" >
              <h4>Categories</h4>
          </div>
        @endif
        <ul>
            <li><a href="/talent-hub">All</a></li>
            @foreach ($categories as $category)
            <li><a href="/{{ $category['url'] }}">{{ $category['name'] }}</a></li>
            @endforeach
        </ul>  
</div>