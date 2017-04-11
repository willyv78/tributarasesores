jQuery(document).ready(function() 
{
    if (themeOption.is_rtl)
	{
		jQuery.Isotope.prototype._positionAbs = function(a, b)
		{
			return{right:a,top:b};
		}
    }
});