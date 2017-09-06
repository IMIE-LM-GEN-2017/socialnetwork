<div class="timeline-nav-bar hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-info">
                    <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo"/>
                    <h3>Prénom Nom</h3>
                    <p class="text-muted">Situation actuelle</p>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="list-inline profile-menu">
                    <li><a href="{!! route('profil') !!}">Mur</a></li>
                    <li><a href="{!! route('about') !!}">Informations</a></li>
                    <li><a href="timeline-album.html">Albums</a></li>
                    <li><a href="{!! route('friendslist') !!}">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                    <li>
                        <button class="btn-primary">Ajouter aux relations</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>