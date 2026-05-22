<div class="col-xl-3 col-lg-4 col-md-6 mb-4">

    <div class="staff-card-modern text-center h-100">

        <!-- Imagen -->
        <div class="staff-img-wrapper">
            <img src="{{ asset($imagen) }}"
                 class="director-img"
                 alt="{{ $nombre }}">
        </div>

        <div class="p-4">

            <h5 class="staff-name mb-1">
                {{ $nombre }}
            </h5>

            <p class="staff-profesion mb-2">
                {{ $profesion }}
            </p>

            <div class="staff-puesto mb-3">
                {{ $puesto }}
            </div>

            <a href="mailto:{{ $correo }}" class="staff-email">
                <i class="bi bi-envelope-fill me-1"></i>
                {{ $correo }}
            </a>

        </div>

    </div>

</div>


<style>

.staff-card-modern{
    background: white;
    border-radius: 28px;
    overflow: hidden;
    transition: all .35s ease;
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    border: 1px solid #f3f3f3;
    position: relative;
}

.staff-card-modern:hover{
    transform: translateY(-10px);
    box-shadow: 0 22px 45px rgba(0,0,0,0.14);
}


.staff-card-modern::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 95px;
    background: linear-gradient(135deg,#002E5F,#004A99);
}


.staff-img-wrapper{
    position: relative;
    z-index: 2;
    padding-top: 35px;
}

.director-img{
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    background: white;
}

.staff-name{
    color: #002E5F;
    font-weight: 700;
    font-size: 1.15rem;
}

.staff-profesion{
    color: #C79A00;
    font-weight: 600;
    font-size: .92rem;
}

.staff-puesto{
    display: inline-block;
    background: #f5f7fb;
    color: #555;
    font-size: .85rem;
    padding: 8px 14px;
    border-radius: 30px;
    line-height: 1.4;
}

.staff-email{
    display: inline-flex;
    align-items: center;
    gap: 5px;
    text-decoration: none;
    color: #002E5F;
    font-weight: 600;
    font-size: .9rem;
    transition: .3s ease;
}

.staff-email:hover{
    color: #C79A00;
}


@media(max-width:768px){

    .director-img{
        width: 100px;
        height: 100px;
    }

}

</style>