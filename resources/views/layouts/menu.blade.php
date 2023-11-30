<header
    x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }"
    @cart-change.window="cartItemsCount = $event.detail.count"
    class="flex justify-between bg-slate-800 shadow-md text-white"
>
<div data-v-fdbd03ac="" class="fixar-cabecalho">
    <!---->
    <div data-v-fdbd03ac="" style="min-width: 220px;">
       <div data-v-fdbd03ac="" style="">
        <a href="{{ route('home') }}" class="block py-navbar-item pl-5"><img data-v-fdbd03ac="" src="img/inova.png" class="logo logo-fixa"></a>

    </div>
    </div>
    <div data-v-fdbd03ac="" style="min-width: 220px; display: none;">
       <div data-v-fdbd03ac="" class="sua-logo" style="display: none;">
          <div data-v-fdbd03ac="" class="vdzp-badge">
             <svg data-v-fdbd03ac="" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-plus">
                <path data-v-fdbd03ac="" fill="currentColor" d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z" class=""></path>
             </svg>
          </div>
          <svg data-v-fdbd03ac="" aria-hidden="true" focusable="false" data-prefix="far" data-icon="signature" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fa-4x icone-assinatura svg-inline--fa fa-signature">
             <path data-v-fdbd03ac="" fill="currentColor" d="M176 128c0-26.5 21.5-48 48-48s48 21.5 48 48v7.9c0 27.5-2.3 55-7 82.1L158 251.1c-36.9 11.4-62 45.5-62 84.1V410c0 38.6 31.3 70 70 70c24.6 0 47.4-12.9 60-34l15.9-26.4c29.6-49.4 51.1-103.3 63.6-159.5l1-4.7 110.8-34.3-23.9 66.8c-2.6 7.4-1.5 15.5 3 21.9s11.8 10.2 19.6 10.2H552c13.3 0 24-10.7 24-24s-10.7-24-24-24H450.1l28.5-79.9c3.1-8.6 1-18.1-5.3-24.7s-15.7-9-24.4-6.3l-133 41.2c2.7-22 4.1-44.2 4.1-66.4V128c0-53-43-96-96-96s-96 43-96 96v40c0 13.3 10.7 24 24 24s24-10.7 24-24V128zm-3.8 169l80.9-25c-11.7 43.2-29.4 84.5-52.4 123l-15.9 26.4c-4 6.6-11.1 10.7-18.8 10.7c-12.1 0-22-9.8-22-22V335.2c0-17.5 11.4-33 28.2-38.2zM64 368H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.2c-.1-2-.2-4-.2-6V368zm216.8 48H616c13.3 0 24-10.7 24-24s-10.7-24-24-24H304.1c-7 16.3-14.8 32.4-23.3 48z" class=""></path>
          </svg>
          <div data-v-fdbd03ac="" class="text-cinza45 fonte-padrao mt-2">Adicione sua logo</div>
       </div>
       <div data-v-fdbd03ac="" class="div-nome-empresa align-center full-height" style=""><label data-v-fdbd03ac="" class="nome-empresa vdzp-vitrine-titulo">Nome Empresa</label></div>
    </div>
    <div data-v-fdbd03ac="" class="filtros-vitrine align-items-end">
       <div data-v-025fb0ce="" data-v-fdbd03ac="">
          <div data-v-025fb0ce="" class="full-width">
             <div data-v-10c58094="" data-v-025fb0ce="" placeholder="Faça sua busca" focusable="true">
                <!---->
                <div data-v-10c58094="" class="el-input el-input-group el-input-group--append el-input--suffix input-vdzp theme-branco ">
                   <!----><input tabindex="-1" type="text" autocomplete="off" placeholder="Faça sua busca" focusable="true" class="el-input__inner"><!---->
                   <span class="el-input__suffix" style="transform: translateX(-90px);">
                      <span class="el-input__suffix-inner">
                         <div data-v-10c58094="">
                            <div data-v-025fb0ce="" style="display: none;">
                               <svg data-v-025fb0ce="" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="cursor-pointer svg-inline--fa fa-circle-xmark">
                                  <path data-v-025fb0ce="" fill="currentColor" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" class=""></path>
                               </svg>
                            </div>
                         </div>
                         <!----><!----><!----><!---->
                      </span>
                      <!---->
                   </span>
                   <div class="el-input-group__append">
                      <div data-v-10c58094="">
                         <div data-v-025fb0ce="" class="mr-1">
                            <div data-v-025fb0ce="" class="inline-flex align-center">
                               <div data-v-025fb0ce="" class="botao-pesquisa">
                                  <svg data-v-025fb0ce="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fonte-grande cursor-pointer svg-inline--fa fa-magnifying-glass">
                                     <path data-v-025fb0ce="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" class=""></path>
                                  </svg>
                               </div>
                               <div data-v-025fb0ce="" class="ml-3 botao-filtro relative">
                                  <svg data-v-025fb0ce="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sliders" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fonte-grande cursor-pointer svg-inline--fa fa-sliders">
                                     <path data-v-025fb0ce="" fill="currentColor" d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z" class=""></path>
                                  </svg>
                                  <div data-v-025fb0ce="" class="vdzp-badge vitrine-bg-color-secondary" style="display: none;">0</div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!---->
                </div>
             </div>
          </div>
          <div data-v-025fb0ce="" class="mt-1 justify-center" style="display: none;">
             <div data-v-025fb0ce="" class="vdzp-texto text-cinza100 mr-2 ml-3">Exibir produtos:</div>
             <div data-v-148d8be4="" data-v-025fb0ce="" role="radiogroup" class="el-radio-group radio-vdzp " inline="" vitrine=""><label data-v-fc924904="" data-v-025fb0ce="" role="radio" aria-checked="true" tabindex="0" class="el-radio is-checked  " label="Ativos"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" autocomplete="off" class="el-radio__original" value="Ativos"></span><span class="el-radio__label">Ativos</span></label><label data-v-fc924904="" data-v-025fb0ce="" role="radio" tabindex="-1" class="el-radio  " label="Inativos"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" autocomplete="off" class="el-radio__original" value="Inativos"></span><span class="el-radio__label">Inativos</span></label></div>
          </div>
          <!---->
          <div data-v-44f03621="" data-v-025fb0ce="" class="modal-generico" style="--overlay: rgba(0,0,0 , 0.6); --background: var(--branco); --border-radius: 16px; --box-shadow: 0 1px 3px var(--preto-30p);">
             <div data-v-44f03621="" class="el-dialog__wrapper" style="display: none; padding-top: 0px !important; overflow-y: hidden;">
                <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog el-dialog--center el-dialog-rounded-modal-generico   " style="margin-top: 0vh;">
                   <div class="el-dialog__header">
                      <span class="el-dialog__title"></span><!---->
                   </div>
                   <!----><!---->
                </div>
             </div>
          </div>
          <div data-v-44f03621="" data-v-025fb0ce="" class="modal-generico" style="--overlay: rgba(0,0,0 , 0.6); --background: var(--branco); --border-radius: 16px; --box-shadow: 0 1px 3px var(--preto-30p);">
             <div data-v-44f03621="" class="el-dialog__wrapper" style="display: none; padding-top: 0px !important; overflow-y: hidden;">
                <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog el-dialog--center el-dialog-rounded-modal-generico   " style="margin-top: 0vh;">
                   <div class="el-dialog__header">
                      <span class="el-dialog__title"></span><!---->
                   </div>
                   <!----><!---->
                </div>
             </div>
          </div>
       </div>
       <div data-v-6a5f2097="" data-v-fdbd03ac="" class="justify-center ml-2">
          <div data-v-6a5f2097="" class="cursor-pointer">
             <svg data-v-6a5f2097="" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-info" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="vitrine-color-primary fonte-grande svg-inline--fa fa-circle-info">
                <path data-v-6a5f2097="" fill="currentColor" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8V248c0-13.3-10.7-24-24-24H216c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64H216zm40-144a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" class=""></path>
             </svg>
             <div data-v-6a5f2097="" class="fonte-extra-pequena vitrine-color-primary">info</div>
          </div>
       </div>
       <div data-v-0572071e="" data-v-fdbd03ac="" class="ml-2">
        <div data-v-0572071e="" class="cursor-pointer relative mb-1 pr-1">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="cart-shopping" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="vitrine-color-primary fa-2x svg-inline--fa fa-cart-shopping">
               <path fill="currentColor" d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" class=""></path>
            </svg>
            <!---->
         </div>
          <!---->
       </div>
    </div>
 </div>
    {{-- <div>
        <a href="{{ route('home') }}" class="block py-navbar-item pl-5"> Logo </a>
    </div>
    <!-- Responsive Menu -->
    <div :class="mobileMenuOpen ? 'left-0' : '-left-[220px]'">
        <ul>
            <li>
                <a href="{{ route('cart.index') }}">
                    <div class="">
                        Cart
                    </div>
                </a>
            </li>
            @if (!Auth::guest())
                <li x-data="{open: false}" class="relative">
                    <a
                        @click="open = !open"

                    >
              <span class="flex items-center">

                My Account
              </span>

                    </a>
                    <ul
                        x-show="open"
                        x-transition
                        class="z-10 right-0 bg-slate-800 py-2"
                    >
                        <li>
                            <a href="{{ route('profile') }}" class="flex px-3 py-2 hover:bg-slate-900">


                                My Profile
                            </a>
                        </li>
                        <li class="hover:bg-slate-900">
                            <a
                                href="{{ route('order.index') }}"
                                class="flex items-center px-3 py-2 hover:bg-slate-900"
                            >

                                My Orders
                            </a>
                        </li>
                        <li class="hover:bg-slate-900">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   class="flex items-center px-3 py-2 hover:bg-slate-900"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">

                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-2 px-3 transition-colors hover:bg-slate-800"
                    >

                        Login
                    </a>
                </li>
                <li class="px-3 py-3">
                    <a
                        href="{{ route('register') }}"
                        class="block text-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors w-full"
                    >
                        Register now
                    </a>
                </li>
            @endif
        </ul>
    </div>


    <button
        @click="mobileMenuOpen = !mobileMenuOpen"
        class="p-4 block md:hidden"
    >

    </button> --}}
</header>
