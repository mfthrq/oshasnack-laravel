<div class="geex-content__header__action">
    <div class="geex-content__header__customizer">
        <button class="geex-btn geex-btn__toggle-sidebar">
            <i class="uil uil-align-center-alt"></i>
        </button>
        <button class="geex-btn geex-btn__customizer">
            <i class="uil uil-pen"></i>
            <span>Customizer</span>
        </button>
    </div>
    <div class="geex-content__header__action__wrap">
        <ul class="geex-content__header__quickaction">
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <img class="user-img" src="assets/img/avatar/user.svg" alt="user" />
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--author">
                    <div class="geex-content__header__popup__header">
                        <div class="geex-content__header__popup__header__img">
                            <img src="assets/img/avatar/user.svg" alt="user" />
                        </div>
                        <div class="geex-content__header__popup__header__content">
                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                            <span class="geex-content__header__popup__header__subtitle">CEO,
                                ThemeWant</span>
                        </div>
                    </div>
                    <div class="geex-content__header__popup__footer">
                        <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="geex-content__header__popup__footer__link" style="background: none; border: none; cursor: pointer;">
                                <i class="uil uil-arrow-up-left"></i>Logout
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>