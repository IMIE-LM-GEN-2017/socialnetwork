<div class="profile-card">
    <img src="images/users/user-1.jpg" alt="user" class="profile-photo"/>
    <h5><a href="{!! route('profil') !!}" class="text-white">Prénom Nom</a></h5>
    <a href="{!! route('friendslist') !!}" class="text-white"><i class="ion ion-android-person-add"></i> 253
        relations</a>
</div><!--profile card ends-->
@include('templates.elements.leftmenu')
<!--news-feed links ends-->
<div id="chat-block">
    @include('templates.elements.onlinefriends')
</div><!--chat block ends-->