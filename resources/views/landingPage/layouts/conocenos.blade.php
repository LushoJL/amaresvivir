<div class="sticky-top sidenav naranjado overflow-auto" >
    <p >Conócenos</p>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link plomo mt-2 {{ $activePage == 'mision' ? ' active' : '' }}"   href="{{ secure_url('/mision') }}" role="tab" aria-controls="v-pills-home" aria-selected="true">Misión</a>
        <a class="nav-link plomo mt-2 {{ $activePage == 'vision' ? ' active' : '' }}"   href="{{ secure_url('/vision') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visión</a>
        <a class="nav-link plomo mt-2 {{ $activePage == 'filosofia' ? ' active' : '' }}"  href="{{ secure_url('/filosofia') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Filosofia</a>
        <a class="nav-link plomo mt-2 {{ $activePage == 'objetivo' ? ' active' : '' }}"  href="{{ secure_url('/objetivos_institucionales') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Objetivos</a>
        <a class="nav-link plomo mt-2 {{ $activePage == 'organigrama' ? ' active' : '' }}"  href="{{ secure_url('/organigrama') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-size:1.8vw;">Ornigrama</a>
    </div>
</div>
