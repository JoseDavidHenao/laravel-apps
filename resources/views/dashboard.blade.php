@extends('shopify-app::layouts.default')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div id="wrapper" class="container px-4 sm:px-6 lg:px-8">
            @include('partials.activate-model')
            <x-status type="positive" tutle="Today's wishlist" number="32" growth="9"/>
            <x-status type="negative" tutle="Yesterday's wishlist" number="20" growth="20"/>
            <x-status type="normal" tutle="Total wishlist" number="432" growth="0"/>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>
@endsection
