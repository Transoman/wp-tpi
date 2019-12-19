let smartgrid  = require('smart-grid');

/* It's principal settings in smart grid project */
let settings = {
  outputStyle: 'sass', /* less || scss || sass || styl */
  columns: 8, /* number of grid columns */
  offset: '50px', /* gutter width px || % || rem */
  mobileFirst: false, /* mobileFirst ? 'min-width' : 'max-width' */
  container: {
    maxWidth: '89.14vw', /* max-width оn very large screen */
    fields: '15px' /* side fields */
  },
  breakPoints: {
    xl: {
      width: '1770px'
    },
    lg: {
      width: '1220px', /* -> @media (max-width: 1100px) */
    },
    md: {
      width: '992px'
    },
    sm: {
      width: '767px',
      fields: '30px'
    },
    xs: {
      width: '576px',
      offset: '30px'
    }
    /*
    We can create any quantity of break points.

    some_name: {
        width: 'Npx',
        fields: 'N(px|%|rem)',
        offset: 'N(px|%|rem)'
    }
    */
  }
};

module.exports = function () {
  $.gulp.task('smartgrid', (cb) => {
    smartgrid('./src/sass/_parts', settings);
    cb();
  });
};