<div class="brands-we-boosted">
    <div class="brands-we-boosted__title style-03 color-blue">
        Brands we boosted
    </div>
    <div class="brands-we-boosted__grid">
        <div class="brands-we-boosted__grid__row brands-we-boosted__grid__row--01">
            <div class="brands-we-boosted__grid__track brands-we-boosted__grid__track--left">
                <?php
                $brands = [
                    "Logo_Uproot_Clean.png",
                    "Logo_StarPack.png",
                    "Logo_Lumero.png",
                    "Logo_Shine_Armor.png",
                    "Logo_Bella_Verite.png",
                    "Logo_WorkoutLabs.png",
                    "Logo_Noobru.png",
                    "Logo_BioluzLED.png",
                    "Logo_Gopure.png",
                    "Logo_ShroomzUP.png",
                    "Logo_Chess_Armory.png",
                    "Logo_Tropicana.png",
                    "Logo_Woods_Foods.png"
                ];

                foreach ($brands as $brand) {
                    printf(
                        '<div class="slide">
                            <img src="/public/images/brands_square/%s" width="%u" height="%u" alt="Media file /%s" loading="lazy" decoding="async" />
                        </div>',
                        $brand,
                        130,
                        75,
                        $brand
                    );
                }

                foreach ($brands as $brand) {
                    printf(
                        '<div class="slide">
                            <img src="/public/images/brands_square/%s" width="%u" height="%u" alt="Media file /%s" loading="lazy" decoding="async" />
                        </div>',
                        $brand,
                        130,
                        75,
                        $brand
                    );
                }
                ?>
            </div>
        </div>

        <div class="brands-we-boosted__grid__row brands-we-boosted__grid__row--02">
            <div class="brands-we-boosted__grid__track brands-we-boosted__grid__track--right">
                <?php
                $brands = [
                    'Logo_Coninx.png',
                    'Logo_Cocosolis.png',
                    'Logo_Veefresh.png',
                    'Logo_Dielsport.png',
                    'Logo_VETS.png',
                    'Logo_Honest_Paws.png',
                    'Logo_NatureOn.png',
                    'Logo_Boundery.png',
                    'Logo_Primalharvest.png',
                    'Logo_Lifepro.png',
                    'Logo_Phenix.png',
                    'Logo_Sunstaches.png'
                ];

                foreach ($brands as $brand) {
                    printf(
                        '<div class="slide">
                            <img src="/public/images/brands_square/%s" width="%u" height="%u" alt="Media file /%s" loading="lazy" decoding="async" />
                        </div>',
                        $brand,
                        130,
                        75,
                        $brand
                    );
                }

                foreach ($brands as $brand) {
                    printf(
                        '<div class="slide">
                            <img src="/public/images/brands_square/%s" width="%u" height="%u" alt="Media file /%s" loading="lazy" decoding="async" />
                        </div>',
                        $brand,
                        130,
                        75,
                        $brand
                    );
                }
                ?>
            </div>
        </div>
    </div>
</div>