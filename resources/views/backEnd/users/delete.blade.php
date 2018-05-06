<style>
    #modal-container.seven {
        transform: scale(1);
    }
    #modal-container.seven .modal-background {
        background: transparent;
        animation: fadeIn 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
    }
    #modal-container.seven .modal-background .modal {
        height: 75px;
        width: 75px;
        border-radius: 75px;
        overflow: hidden;
        animation: bondJamesBond 1.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
    }
    #modal-container.seven .modal-background .modal h2, #modal-container.seven .modal-background .modal p {
        opacity: 0;
        position: relative;
        animation: modalContentFadeIn .5s 1.4s linear forwards;
    }
    #modal-container.seven.out {
        animation: slowFade .5s 1.5s linear forwards;
    }
    #modal-container.seven.out .modal-background {
        background-color: rgba(0, 0, 0, 0.7);
        animation: fadeToRed 2s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
    }
    #modal-container.seven.out .modal-background .modal {
        border-radius: 3px;
        height: 162px;
        width: 227px;
        animation: killShot 1s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
    }
    #modal-container.seven.out .modal-background .modal h2, #modal-container.seven.out .modal-background .modal p {
        animation: modalContentFadeOut 0.5s 0.5 cubic-bezier(0.165, 0.84, 0.44, 1) forwards;
    }
</style>

<div id="modal-container">
    <div class="modal-background">
        <div class="modal">
            <h2>I'm a Modal</h2>
            <p>Hear me roar.</p>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
            </svg>
        </div>
    </div>
</div>

