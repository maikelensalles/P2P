<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      <img src="{{ asset('material') }}/img//apple-icon.png" />
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">house</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#grupos" aria-expanded="true">
          <i class="material-icons">groups</i>
          <p>{{ __('Grupos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="grupos">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('revendas.index') }}">
                <i class="material-icons">horizontal_rule</i>
                <span class="sidebar-normal">{{ __('Revendas') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons">horizontal_rule</i>
                <span class="sidebar-normal"> {{ __('Usuários P2P ') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons">horizontal_rule</i>
                <span class="sidebar-normal"> {{ __('Testes P2P ') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons">horizontal_rule</i>
                <span class="sidebar-normal"> {{ __('Usuários Xtream ') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons">horizontal_rule</i>
                <span class="sidebar-normal"> {{ __('Testes Xtream ') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="material-icons">credit_card</i>
            <p>{{ __('Financeiro') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="material-icons">settings</i>
            <p>{{ __('Opções') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="material-icons">support</i>
            <p>{{ __('Suporte') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Logs') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="material-icons">sort</i>
            <p>{{ __('Relatório') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">person_pin</i>
            <p>{{ __('Perfil') }}</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="material-icons">power_settings_new</i>
            <p>{{ __('Sair') }}</p>
        </a>
      </li>

      

      {{--<li class="nav-item{{ $activePage ?? ''  == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? ''  == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? ''  == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? ''  == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? ''  == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? ''  == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>--}}
      
    </ul>
  </div>
</div>