<?php 
    use App\Models\QuestionCategory;
    $categoryModel = new QuestionCategory;
    $categories = $categoryModel->categoryList();
?>
<ul>
    <li><a href="/question-index">All</a></li>
    @foreach ($categories as $category)
        <li><a href="/question/{{ $category['url'] }}">{{ $category['name'] }}</a></li>
    @endforeach
</ul>