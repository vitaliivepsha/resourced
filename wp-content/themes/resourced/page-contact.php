<?php
/* Template Name: Contact */
get_header(); ?>

<main class="main">
    <div class="contact-main">
        <div class="contact-top">
            <div class="container">
                <div class="contact-top__wrapper">
                    <div class="contact-info">
                        <span class="contact-title"><?php the_field('contact_title'); ?></span>
                        <div class="contact-descr">
                            <?php the_field('contact_text'); ?>
                        </div>
                        <div class="contact-links">
                            <?php if( ! empty( get_field('wechat', 'option') ) ): ?>
                                <a href="<?php the_field('wechat', 'option') ?>">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.6693 26.0333C30.7013 24.56 32 22.3827 32 19.9613C32 15.5267 27.684 11.9307 22.3613 11.9307C17.0387 11.9307 12.7227 15.5267 12.7227 19.9613C12.7227 24.3973 17.0387 27.9933 22.3613 27.9933C23.4613 27.9933 24.5227 27.8373 25.508 27.5533L25.7907 27.5107C25.976 27.5107 26.144 27.568 26.3027 27.6587L28.4133 28.8773L28.5987 28.9373C28.776 28.9373 28.92 28.7933 28.92 28.616L28.868 28.3813L28.4333 26.7613L28.4 26.556C28.4 26.34 28.5067 26.1493 28.6693 26.0333ZM11.5667 3.06267C5.17867 3.06267 0 7.37733 0 12.7013C0 15.6053 1.55733 18.22 3.996 19.9867C4.192 20.1253 4.32 20.3547 4.32 20.6147L4.28 20.86L3.75867 22.804L3.696 23.0853C3.696 23.2987 3.86933 23.472 4.08133 23.472L4.30533 23.4L6.83733 21.9373C7.02667 21.828 7.228 21.76 7.45067 21.76L7.79067 21.8107C8.972 22.1507 10.2467 22.34 11.5667 22.34L12.2013 22.324C11.9507 21.572 11.8133 20.78 11.8133 19.9627C11.8133 15.108 16.536 11.172 22.3613 11.172L22.9893 11.188C22.1187 6.584 17.336 3.06267 11.5667 3.06267ZM19.148 18.6773C18.4387 18.6773 17.864 18.1013 17.864 17.392C17.864 16.6813 18.4387 16.1067 19.148 16.1067C19.8587 16.1067 20.4333 16.6813 20.4333 17.392C20.4333 18.1013 19.8587 18.6773 19.148 18.6773ZM25.5747 18.6773C24.864 18.6773 24.2893 18.1013 24.2893 17.392C24.2893 16.6813 24.864 16.1067 25.5747 16.1067C26.284 16.1067 26.8587 16.6813 26.8587 17.392C26.8587 18.1013 26.284 18.6773 25.5747 18.6773ZM7.71067 11.1587C6.85867 11.1587 6.16933 10.468 6.16933 9.61733C6.16933 8.76533 6.85867 8.07467 7.71067 8.07467C8.56267 8.07467 9.25333 8.76533 9.25333 9.61733C9.25333 10.468 8.56267 11.1587 7.71067 11.1587ZM15.4213 11.1587C14.5693 11.1587 13.88 10.468 13.88 9.61733C13.88 8.76533 14.5693 8.07467 15.4213 8.07467C16.2733 8.07467 16.964 8.76533 16.964 9.61733C16.964 10.468 16.2733 11.1587 15.4213 11.1587Z" fill="#00AD13"/>
                                        </svg>
                                    </div>
                                    <span>Wechat</span>
                                </a>
                            <?php endif; ?>
                            <?php if( ! empty( get_field('whatsapp', 'option') ) ): ?>
                                <a href="<?php the_field('whatsapp', 'option') ?>">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.076004 32L2.32534 23.7827C0.937337 21.3773 0.208004 18.6507 0.209337 15.8547C0.213337 7.11333 7.32667 0 16.0667 0C20.308 0.00133333 24.2893 1.65333 27.284 4.65067C30.2773 7.648 31.9253 11.632 31.924 15.8693C31.92 24.612 24.8067 31.7253 16.0667 31.7253C13.4133 31.724 10.7987 31.0587 8.48267 29.7947L0.076004 32ZM8.872 26.924C11.1067 28.2507 13.24 29.0453 16.0613 29.0467C23.3253 29.0467 29.2427 23.1347 29.2467 15.8667C29.2493 8.584 23.36 2.68 16.072 2.67733C8.80267 2.67733 2.88934 8.58933 2.88667 15.856C2.88534 18.8227 3.75467 21.044 5.21467 23.368L3.88267 28.232L8.872 26.924ZM24.0547 19.6387C23.956 19.4733 23.692 19.3747 23.2947 19.176C22.8987 18.9773 20.9507 18.0187 20.5867 17.8867C20.224 17.7547 19.96 17.688 19.6947 18.0853C19.4307 18.4813 18.6707 19.3747 18.44 19.6387C18.2093 19.9027 17.9773 19.936 17.5813 19.7373C17.1853 19.5387 15.908 19.1213 14.3947 17.7707C13.2173 16.72 12.4213 15.4227 12.1907 15.0253C11.96 14.6293 12.1667 14.4147 12.364 14.2173C12.5427 14.04 12.76 13.7547 12.9587 13.5227C13.16 13.2933 13.2253 13.128 13.3587 12.8627C13.4907 12.5987 13.4253 12.3667 13.3253 12.168C13.2253 11.9707 12.4333 10.02 12.104 9.22667C11.7813 8.45467 11.4547 8.55867 11.212 8.54667L10.452 8.53333C10.188 8.53333 9.75867 8.632 9.396 9.02933C9.03334 9.42667 8.00934 10.384 8.00934 12.3347C8.00934 14.2853 9.42934 16.1693 9.62667 16.4333C9.82534 16.6973 12.42 20.7 16.3947 22.416C17.34 22.824 18.0787 23.068 18.6533 23.2507C19.6027 23.552 20.4667 23.5093 21.1493 23.408C21.9107 23.2947 23.4933 22.4493 23.824 21.524C24.1547 20.5973 24.1547 19.804 24.0547 19.6387Z" fill="#00D54D"/>
                                        </svg>
                                    </div>
                                    <span>What's app</span>
                                </a>
                            <?php endif; ?>
                            <?php if( ! empty( get_field('linkedin', 'option') ) ): ?>
                                <a href="<?php the_field('linkedin', 'option') ?>">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.265 27.2668H22.5239V19.8393C22.5239 18.0684 22.492 15.788 20.0576 15.788C17.5882 15.788 17.2101 17.7173 17.2101 19.7092V27.2662H12.469V11.9963H17.0205V14.0834H17.0818C17.5374 13.3045 18.1957 12.6638 18.9866 12.2295C19.7775 11.7951 20.6714 11.5834 21.5731 11.617C26.3787 11.617 27.265 14.7782 27.265 18.8904V27.2668ZM7.11902 9.90867C6.57476 9.90879 6.04268 9.7475 5.59008 9.4452C5.13748 9.1429 4.78468 8.71316 4.57632 8.21034C4.36795 7.70752 4.31337 7.1542 4.41948 6.62035C4.52558 6.08651 4.78761 5.59612 5.17242 5.21121C5.55724 4.82629 6.04755 4.56414 6.58135 4.45791C7.11515 4.35168 7.66846 4.40614 8.17131 4.61441C8.67416 4.82267 9.10396 5.17538 9.40635 5.62793C9.70874 6.08048 9.87014 6.61254 9.87014 7.15683C9.87014 7.88656 9.58031 8.58641 9.06439 9.10246C8.54848 9.61851 7.84872 9.90851 7.11902 9.90867V9.90867ZM9.48958 27.2662H4.74356V11.9963H9.49019L9.48958 27.2662ZM29.6264 0.00254535H2.36073C2.05401 -0.00118314 1.74956 0.0556269 1.46483 0.169723C1.18009 0.283819 0.92065 0.452961 0.701367 0.667463C0.482084 0.881964 0.307263 1.13761 0.186912 1.41977C0.0665614 1.70193 0.00304479 2.00506 0 2.3118V29.689C0.0072854 30.3082 0.260072 30.8993 0.70283 31.3323C1.14559 31.7653 1.7421 32.0048 2.36135 31.9983H29.6264C30.2472 32.0066 30.846 31.768 31.291 31.335C31.736 30.9019 31.9908 30.3099 31.9994 29.689V2.3069C31.9905 1.68639 31.7355 1.09482 31.2905 0.662333C30.8454 0.229843 30.2469 -0.00815065 29.6264 0.000703909" fill="#0A66C2"/>
                                        </svg>
                                    </div>
                                    <span>LinkedIn</span>
                                </a>
                            <?php endif; ?>
                            <?php if( ! empty( get_field('email', 'option') ) ): ?>
                                <a href="mailto:<?php the_field('linkedin', 'option') ?>">
                                    <div>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 10.2V21.9375L8.38401 16.488L0 10.2Z" fill="#8E57FF"/>
                                            <path d="M32 21.9375V10.2L23.616 16.488L32 21.9375Z" fill="#8E57FF"/>
                                            <path d="M18.4 20.4C16.9778 21.4667 15.0222 21.4667 13.6 20.4L12.6648 19.6986C11.3217 18.6913 9.4925 18.6299 8.08486 19.5448L0.707875 24.3399C0.266371 24.6269 0 25.1177 0 25.6443C0 26.5035 0.696523 27.2 1.55573 27.2H30.4443C31.3035 27.2 32 26.5035 32 25.6443C32 25.1177 31.7336 24.6269 31.2921 24.3399L23.9151 19.5448C22.5075 18.6299 20.6783 18.6913 19.3352 19.6986L18.4 20.4Z" fill="#8E57FF"/>
                                            <path d="M0 6.39999C0 6.9036 0.237111 7.37783 0.64 7.67999L13.6 17.4C15.0222 18.4666 16.9778 18.4666 18.4 17.4L31.36 7.67999C31.7629 7.37783 32 6.9036 32 6.39999C32 5.51634 31.2837 4.8 30.4 4.8H1.6C0.716342 4.8 0 5.51634 0 6.39999Z" fill="#8E57FF"/>
                                        </svg>
                                    </div>
                                    <span>Mail</span>
                                </a>
                            <?php endif; ?>
                            <?php if( ! empty( get_field('phone', 'option') ) ): ?>
                                <a href="tel:<?php echo str_replace(array(' ', '(' , ')', '-'), '', get_field('phone', 'option')); ?>">
                                    <div>
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.6785 22.7511C28.5618 20.6399 24.6837 18.3508 24.513 18.2507C24.0147 17.9671 23.4947 17.8169 23.008 17.8169C22.2845 17.8169 21.6922 18.1484 21.3335 18.7513C20.7662 19.4298 20.0627 20.2228 19.8919 20.3457C18.5705 21.2423 17.5361 21.1405 16.3915 19.9959L10.0035 13.6074C8.86619 12.4701 8.76163 11.4228 9.65203 10.1086C9.77661 9.93679 10.5697 9.2327 11.2482 8.66487C11.6809 8.40737 11.9779 8.02473 12.108 7.55534C12.281 6.93078 12.1536 6.1961 11.7454 5.48033C11.6492 5.31571 9.35894 1.4371 7.24889 0.320903C6.85514 0.112346 6.41133 0.00222778 5.96641 0.00222778C5.2334 0.00222778 4.54377 0.28809 4.02543 0.805869L2.61392 2.21683C0.381519 4.44867 -0.426571 6.97861 0.21078 9.73602C0.742463 12.034 2.2919 14.4794 4.81684 17.0038L12.9951 25.182C16.1907 28.3777 19.2373 29.9983 22.0503 29.9983C22.0503 29.9983 22.0503 29.9983 22.0509 29.9983C24.1198 29.9983 26.0485 29.1191 27.7821 27.3855L29.193 25.9746C30.0506 25.1175 30.2453 23.8217 29.6785 22.7511Z" fill="#8E57FF"/>
                                        </svg>
                                    </div>
                                    <span>Phone</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <form class="contact-form ajax_form" data-error-title="Error!"
                          data-error-message="Try again later"
                          data-success-title="Thank you!"
                          data-success-message="We´ll get back to you with an update shortly">
                        <div class="contact-form__inner">
                            <span class="contact-form__title">Contact with us</span>
                            <div class="input-wrapper">
                                <input class="input" name="name" placeholder="Name and surname" data-title="Name and surname" data-validate-required="Required!">
                                <label>Name <span>*</span></label>
                            </div>
                            <div class="input-wrapper">
                                <input class="input" name="email" placeholder="E-mail" data-title="Email" data-validate-required="Required!" data-validate-email="Please use valid e-mail adress">
                                <label>Work e-mail <span>*</span></label>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 4.00302H4C2.9 4.00302 2.01 4.90302 2.01 6.00302L2 18.003C2 19.103 2.9 20.003 4 20.003H20C21.1 20.003 22 19.103 22 18.003V6.00302C22 4.90302 21.1 4.00302 20 4.00302ZM20 17.003C20 17.553 19.55 18.003 19 18.003H5C4.45 18.003 4 17.553 4 17.003V8.00302L10.94 12.343C11.59 12.753 12.41 12.753 13.06 12.343L20 8.00302V17.003ZM4 6.00302L12 11.003L20 6.00302H4Z" fill="#7040FF"/>
                                </svg>
                            </div>
                            <div class="input-wrapper">
                                <input class="input" name="phone" placeholder="+46 553 222 111" data-title="Phone" data-validate-required="Required!">
                                <label>Work phone <span>*</span></label>
                            </div>
                            <!--<div class="input-wrapper">
                                <input class="input" name="company" placeholder="Your company name" data-title="Company name">
                                <label>Company name</label>
                            </div>-->
                            <div class="input-wrapper select-wrapper">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.57805 10.9798L10.6278 15.4915C11.3882 16.1708 12.6166 16.1708 13.377 15.4915L18.4268 10.9798C19.6551 9.88233 18.7777 8.001 17.0424 8.001H6.94286C5.2076 8.001 4.34972 9.88233 5.57805 10.9798Z" fill="#671DFF"/>
                                </svg>
                                <input name="company_size" data-title="Company size" data-validate-required="Required!" hidden>
                                <select class="select">
                                    <option selected disabled>Select</option>
                                    <option>5 products/10k units</option>
                                    <option>30 products/100k units</option>
                                    <option>400 products/400k units</option>
                                    <option>700 products/2m units</option>
                                    <option>Over 700 products/2m units</option>
                                </select>
                                <label>Company size <span>*</span></label>
                            </div>
                            <div class="input-wrapper">
                                <textarea class="textarea" name="comment" placeholder="I need to contact sales" data-title="Comment"></textarea>
                                <label>What would you like help with?</label>
                            </div>
                            <div class="policy-text">I acknowledge that my data will be handled in accordance with <a href="javascript:void(0)">Privacy Policy</a> and authorize Resourced to send me updates about news, services, and events.</div>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-bot">
            <div class="container">
                <span class="contact-bot__title"><?php the_field('contact_brands_title'); ?></span>
                <?php $brands = get_field('contact_brands'); ?>
                <?php if( ! empty( $brands ) ): ?>
                <ul class="contact-bot__brands">
                    <?php foreach( $brands as $brand ): ?>
                        <li>
                            <picture>
                               <!-- <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.webp" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/our-partners-09.webp"
                                        class="lazy-web" type="image/webp">
                                <source srcset="<?php /*echo get_template_directory_uri() */?>/images/pixel.png" data-original="<?php /*echo get_template_directory_uri() */?>/images/partners/our-partners-09.png"
                                        class="lazy-web" type="image/png">-->
                                <img src="<?php echo get_template_directory_uri() ?>/images/pixel.png" data-original="<?php echo $brand['url']; ?>" class="lazy"
                                     alt="">
                            </picture>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
