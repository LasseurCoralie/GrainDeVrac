import styled from 'styled-components';
import theme from '../../../theme/theme';

const PageTitleStyled = styled.div`

  text-align: center;

  p.sub-txt {
    color: ${theme.colors.black};
    margin: 0 6.5em;
    font-style: italic;
    line-height: 1.3em;
  }

  @media (min-width: 1100px) {
    margin-top: 5em;
  }
`;

export default PageTitleStyled;