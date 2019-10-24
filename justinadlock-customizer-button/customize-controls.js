( function( api ) {

	// Extends our custom "brittominimal" section.
	api.sectionConstructor['brittominimal'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
