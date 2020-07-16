import styled from 'styled-components';
import theme from '../../../theme/theme';

const ButtonStyled = styled.div`
  button {
    background-color: ${theme.colors.orange};
    font-family: ${theme.fonts.special};
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    border: none;
    padding: 16px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    cursor: pointer;
  }
`;

export default ButtonStyled;