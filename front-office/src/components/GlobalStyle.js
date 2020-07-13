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


`;

export default GlobalStyle;