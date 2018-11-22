<?php 
function my_acf_add_local_field_groups() {
        //Misc
	get_template_part('/acf/acf','general');
	//SEO
	get_template_part('/acf/acf','seo');
	// Startseiten.Beiträge
	get_template_part('/acF/acf-related','start');
        // Carousel
	get_template_part('/acF/acf','carousel');
	//Banner
	get_template_part('/acf/acf','banner');
	//Termine
	get_template_part('/acf/acf','events');
	//Sidebar
	get_template_part('/acf/acf','ataglance');
        // Related Articles
        get_template_part('/acF/acf','related');
}
//add_action('acf/init', 'my_acf_add_local_field_groups');
?>