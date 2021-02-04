@extends('layouts.app')

@section('title', 'トップページ')

@section('content')

<div class="l-wrapper__2colum u-site__width">

  @include('components.sidebar-category',[ 'categories' => $categories ])
  

  <transition name="menu">
      <category-menu v-if="menu" :categories="{{ $categories }}"></category-menu>
  </transition>

  <main class="l-main__2colum">
    
    @component('components.pickupCategory-section', [ 'pickupCategories' => $pickupCategories])
      @slot('title')
        人気カテゴリー
      @endslot
    @endcomponent
    
    
    @component('components.pickupList-section', ['ideas' => $ideas])
      @slot('title')
        新着のアイデア
      @endslot
    @endcomponent

    @component('components.simpleList-reviewSection', ['reviews' => $reviews])
      @slot('title')
        新着のレビュー
      @endslot
    @endcomponent

  </main>
  
  <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in!
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
@endsection