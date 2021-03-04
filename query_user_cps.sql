select (select CONCAT(p.first_name,' ',p.last_name)),u.email, p.company_name, p.country_id, r.authority from `user` u join user_role ur on u.id = ur.user_id join `role` r on ur.role_id = r.id join profile p on u.id = p.user_id where r.authority IN (
			"ROLE_CPS_REGIONAL_ADMINISTRATOR",
			"ROLE_CPS_ADMINISTRATOR_SG",
			"ROLE_CPS_ADMINISTRATOR_IN",
			"ROLE_CPS_ADMINISTRATOR_ID", 
			"ROLE_CPS_ADMINISTRATOR_MY", 
			"ROLE_CPS_ADMINISTRATOR_TH",
			"ROLE_CPS_ADMINISTRATOR_VN",
			"ROLE_CPS_ADMINISTRATOR_TW",
			"ROLE_CPS_FRONTDESK_ADMINISTRATOR_SG",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_IN",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_ID",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_MY",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_TH",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_VN",
            "ROLE_CPS_FRONTDESK_ADMINISTRATOR_TW")
            
select * from site_setting where setting_type = "CPS_OIC_EMAIL"