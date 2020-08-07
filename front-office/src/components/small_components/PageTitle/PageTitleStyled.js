import styled from 'styled-components';
import theme from '../../../theme/theme';

const PageTitleStyled = styled.div`

  text-align: center;

  h2.title, p.sub-txt {
    margin: 1em 3em;
  }

  p.sub-txt {
    color: ${theme.colors.black};
    font-style: italic;
    line-height: 1.3em;
  }

  @media (min-width: 1100px) {
    margin-top: 5em;
  }
`;

export default PageTitleStyled;