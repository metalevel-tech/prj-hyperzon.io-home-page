<div class="bullets bullets--02">
    <div class="bullets__title style-03">
        COMPLETE AMAZON MANAGEMENT<br /> PROGRAM INCLUDES
    </div>
    <div class="bullets__list">
        <div class="bullets__list__grid">
            <?php
            $bullets = [
                [
                    "src" => "icon_1.webp",
                    "srcset" => "icon_1@2x.webp 2x",
                    "title" => "Custom-Tailored<br /> Marketing Strategy",
                    "text" => "World-class marketing practices & step-by-step phases and processes"
                ],
                [
                    "src" => "icon_2.webp",
                    "srcset" => "icon_2@2x.webp 2x",
                    "title" => "Improve Your<br /> Organic Ranking",
                    "text" => "Better product visibility & organic traffic",
                ],
                [
                    "src" => "icon_3.webp",
                    "srcset" => "icon_3@2x.webp 2x",
                    "title" => "Amazon PPC Management",
                    "text" => "Best-practice campaign configuration & ACoS optimisation",
                ],
                [
                    "src" => "icon_4.webp",
                    "srcset" => "icon_4@2x.webp 2x",
                    "title" => "Limited Software with Integrated AI technology",
                    "text" => "For Hyperzon clients' use only",
                ],
                [
                    "src" => "icon_5.webp",
                    "srcset" => "icon_5@2x.webp 2x",
                    "title" => "Fast & Furious Senior Designers",
                    "text" => "With years of Amazon experience",
                ],
                [
                    "src" => "icon_6.webp",
                    "srcset" => "icon_6@2x.webp 2x",
                    "title" => "High-Converting Listing Optimisation",
                    "text" => "Title and Bullets, enriched with relevant keywords, A+ content, Images",
                ],
                [
                    "src" => "icon_7.webp",
                    "srcset" => "icon_7@2x.webp 2x",
                    "title" => "Review Generation Campaigns",
                    "text" => "Increase the review rate by up to 60%"
                ],
                [
                    "src" => "icon_8.webp",
                    "srcset" => "icon_8@2x.webp 2x",
                    "title" => "Reporting, Analysis & Monitoring",
                    "text" => "Performance tracking, keyword ranking & account health monitoring",
                ],
                [
                    "src" => "icon_9.webp",
                    "srcset" => "icon_9@2x.webp 2x",
                    "title" => "Constant A/B testing",
                    "text" => "For better CTR & converstion rates",
                ],
                [
                    "src" => "icon_10.webp",
                    "srcset" => "icon_10@2x.webp 2x",
                    "title" => "Dedicated Account Manager",
                    "text" => "With active daily communication",
                ]
            ];

            foreach ($bullets as $index => $bullet) {
                // We need CSS Grid not columns like these
                if ($index == 0) {
                    printf('<div class="bullets__list__grid__col">');
                } else if ($index == count($bullets) / 2) {
                    printf('</div><div class="bullets__list__grid__col">');
                }

                printf(
                    '<div class="bullets__single">
                        <div class="bullets__single__image">
                            <img src="%s/%s" srcset="/public/images/icons/management/%s" width="%u" height="%u" alt="Icon image" loading="lazy" decoding="async" />
                        </div>
                        <div class="bullets__single__text">
                            <span>%s</span>
                            <div>%s</div>
                        </div>
                    </div>',
                    "/public/images/icons/management",
                    $bullet["src"],
                    $bullet["srcset"],
                    100,
                    100,
                    $bullet["title"],
                    $bullet["text"]
                );

                if ($index == count($bullets) - 1) {
                    printf('</div>');
                }
            }
            ?>

        </div>
    </div>
</div>