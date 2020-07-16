// == Import des fichiers pour reset le css 
// -> yarn add sanitize.css --save
import 'sanitize.css';
import 'sanitize.css/forms.css';
import 'sanitize.css/typography.css';

import { createGlobalStyle } from 'styled-components';

import theme from '../theme/theme';

const GlobalStyle = createGlobalStyle`

  body {
    color: ${theme.colors.black};
    font-family: ${theme.fonts.regular};
  }

  h1, h2 {
    font-family: ${theme.fonts.special};
  }

  h2.title {
    color: ${theme.colors.orange};
    text-transform: uppercase;
    font-size: 24px;
  }

  p.sub-txt {
    color: ${theme.colors.black};
    margin: 0 6.5em;
    font-style: italic;
  }


`;

export default GlobalStyle;