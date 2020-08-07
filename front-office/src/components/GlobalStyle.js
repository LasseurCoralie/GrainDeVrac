// == Import des fichiers pour reset le css 
// -> yarn add sanitize.css --save
import 'sanitize.css';
import 'sanitize.css/forms.css';
import 'sanitize.css/typography.css';

import { createGlobalStyle } from 'styled-components';

import theme from '../theme/theme';

const GlobalStyle = createGlobalStyle`

  html {
    height: 100%;
  }

  body {
    color: ${theme.colors.black};
    font-family: ${theme.fonts.regular};
    min-height: 100%;
    margin: 0;
    padding: 0;
    position: relative;
    padding-bottom: 220px;
    box-sizing: border-box;
      
      footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
      }
  }


  h1, h2 {
    font-family: ${theme.fonts.special};
  }

  h2.title {
    color: ${theme.colors.orange};
    text-transform: uppercase;
    font-size: 2rem;
    line-height: 2.5rem;
  }

  a, button {
    cursor: pointer;
  }

  a.navlink-button {
    display: inline-block;
    margin: 2em 0;
  }
`;

export default GlobalStyle;